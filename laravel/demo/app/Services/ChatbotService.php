<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use RuntimeException;

class ChatbotService
{
    private const TABLES = [
        'users' => ['id', 'name', 'email', 'phone', 'gender', 'role', 'email_verified_at', 'created_at', 'updated_at'],
        'categories' => ['id', 'name', 'description', 'created_at', 'updated_at'],
        'products' => ['id', 'name', 'description', 'price', 'quantity', 'category_id', 'created_at', 'updated_at'],
        'orders' => ['id', 'user_id', 'created_at', 'updated_at'],
        'order_items' => ['id', 'order_id', 'product_id', 'quantity', 'price', 'created_at', 'updated_at'],
    ];

    public function respond(User $user, string $message, ?string $imageData, string $responseType): array
    {
        if ($responseType === 'image') {
            return $this->generateImage($message, $imageData);
        }

        $databaseContext = $this->answerFromDatabase($user, $message);

        return [
            'type' => 'text',
            'content' => $this->generateText($user, $message, $imageData, $databaseContext),
        ];
    }

    private function generateText(User $user, string $message, ?string $imageData, ?array $databaseContext): string
    {
        $content = [['type' => 'input_text', 'text' => $message]];

        if ($imageData !== null) {
            $content[] = ['type' => 'input_image', 'image_url' => $imageData];
        }

        $context = $databaseContext === null
            ? 'No database query was needed for this request.'
            : json_encode($databaseContext, JSON_THROW_ON_ERROR);

        $response = $this->client()->post('/responses', [
            'model' => config('services.openai.model'),
            'input' => [[
                'role' => 'system',
                'content' => [[
                    'type' => 'input_text',
                    'text' => "You are a helpful assistant for an ecommerce application. The current user is {$user->name}. Answer using the database context when it is provided. Never invent database facts and never reveal passwords, tokens, or private data belonging to another user.\n\nDatabase context:\n{$context}",
                ]],
            ], [
                'role' => 'user',
                'content' => $content,
            ]],
        ])->throw()->json();

        return $this->extractOutputText($response);
    }

    private function generateImage(string $message, ?string $imageData): array
    {
        $prompt = $imageData === null
            ? $message
            : "Use the supplied reference image as inspiration. {$message}";

        $response = $this->client()->post('/images/generations', [
            'model' => config('services.openai.image_model'),
            'prompt' => $prompt,
            'size' => '1024x1024',
            'response_format' => 'b64_json',
        ])->throw()->json();

        $image = data_get($response, 'data.0.b64_json');

        if (! is_string($image) || $image === '') {
            throw new RuntimeException('The image provider returned no image.');
        }

        return [
            'type' => 'image',
            'content' => "data:image/png;base64,{$image}",
        ];
    }

    private function answerFromDatabase(User $user, string $message): ?array
    {
        $schema = json_encode($this->visibleSchema($user), JSON_THROW_ON_ERROR);
        $response = $this->client()->post('/responses', [
            'model' => config('services.openai.model'),
            'input' => "Decide whether this request needs ecommerce database data. If it does, return only valid JSON with keys needs_database (boolean) and sql (string). The SQL must be one SELECT statement, use only the supplied tables and columns, contain no comments or semicolons, and use :user_id for the current user's id when required. If it does not need database data, return {\"needs_database\":false,\"sql\":\"\"}.\n\nUser is admin: ".($user->role === 'admin' ? 'true' : 'false')."\nSchema: {$schema}\nRequest: {$message}",
        ])->throw()->json();

        $decision = json_decode($this->extractOutputText($response), true);

        if (! is_array($decision) || ! ($decision['needs_database'] ?? false)) {
            return null;
        }

        $sql = $decision['sql'] ?? null;

        if (! is_string($sql)) {
            throw new RuntimeException('The database request was invalid.');
        }

        $this->validateSql($sql, $user);
        $bindings = str_contains($sql, ':user_id') ? ['user_id' => $user->id] : [];

        return [
            'rows' => DB::select($sql.' LIMIT 100', $bindings),
            'role' => $user->role,
        ];
    }

    private function visibleSchema(User $user): array
    {
        if ($user->role === 'admin') {
            return self::TABLES;
        }

        return [
            'categories' => self::TABLES['categories'],
            'products' => self::TABLES['products'],
            'orders' => self::TABLES['orders'],
            'order_items' => self::TABLES['order_items'],
        ];
    }

    private function validateSql(string $sql, User $user): void
    {
        $normalized = strtolower(trim($sql));

        if (! Str::startsWith($normalized, 'select ') || str_contains($normalized, ';') || str_contains($normalized, '--') || str_contains($normalized, '/*')) {
            throw new RuntimeException('Only read-only SELECT queries are allowed.');
        }

        if (preg_match('/\b(insert|update|delete|drop|alter|create|replace|attach|pragma|union)\b/i', $normalized)) {
            throw new RuntimeException('Only read-only SELECT queries are allowed.');
        }

        foreach (preg_match_all('/\b(?:from|join)\s+([a-z_][a-z0-9_]*)/i', $normalized, $matches) ? $matches[1] : [] as $table) {
            if (! array_key_exists($table, $this->visibleSchema($user))) {
                throw new AuthorizationException("You don't have access on it.");
            }
        }

        if ($user->role !== 'admin' && preg_match('/\borders\b|\border_items\b/i', $normalized) && ! preg_match('/\buser_id\s*=\s*:user_id\b/i', $normalized)) {
            throw new AuthorizationException("You don't have access on it.");
        }

        if (preg_match('/\b(password|remember_token|token|secret)\b/i', $normalized)) {
            throw new RuntimeException('Sensitive columns cannot be queried.');
        }

        if (preg_match('/\busers\b/i', $normalized) && preg_match('/\bselect\s+\*/i', $normalized)) {
            throw new RuntimeException('User queries must select approved columns explicitly.');
        }
    }

    private function client(): PendingRequest
    {
        $apiKey = config('services.openai.api_key');

        if (! is_string($apiKey) || $apiKey === '') {
            throw new RuntimeException('OPENAI_API_KEY is not configured.');
        }

        return Http::baseUrl(config('services.openai.base_url'))
            ->withToken($apiKey)
            ->acceptJson()
            ->timeout(90);
    }

    private function extractOutputText(array $response): string
    {
        $text = data_get($response, 'output.0.content.0.text');

        if (! is_string($text) || $text === '') {
            throw new RuntimeException('The text provider returned no response.');
        }

        return $text;
    }
}
