<?php

use App\Models\User;
use App\Services\ChatbotService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Http;

test('guests cannot access the chatbot', function () {
    $this->get(route('chatbot.index'))
        ->assertStatus(302);
});

test('regular users cannot query tables outside the chatbot allowlist', function () {
    config(['services.openai.api_key' => 'test-key']);

    Http::fake([
        'api.openai.com/*' => Http::response([
            'output' => [[
                'content' => [[
                    'text' => json_encode([
                        'needs_database' => true,
                        'sql' => 'select * from users',
                    ]),
                ]],
            ]],
        ]),
    ]);

    $user = new User([
        'name' => 'Regular User',
        'role' => 'user',
    ]);

    expect(fn () => app(ChatbotService::class)->respond($user, 'show me users', null, 'text'))
        ->toThrow(AuthorizationException::class, "You don't have access on it.");
});
