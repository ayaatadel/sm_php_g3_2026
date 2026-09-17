<?php

namespace App\Http\Controllers;

use App\Services\ChatbotService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChatbotController extends Controller
{
    public function __construct(private ChatbotService $chatbot) {}

    public function index(): View
    {
        return view('chatboot.index');
    }

    public function respond(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'message' => ['required', 'string', 'max:4000'],
            'response_type' => ['nullable', 'in:text,image'],
            'image' => ['nullable', 'image', 'max:10240'],
        ]);

        $imageData = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageData = 'data:'.$file->getMimeType().';base64,'.base64_encode($file->getContent());
        }

        try {
            return response()->json($this->chatbot->respond(
                $request->user(),
                $validated['message'],
                $imageData,
                $validated['response_type'] ?? 'text',
            ));
        } catch (AuthorizationException) {
            return response()->json([
                'message' => "You don't have access on it.",
            ], 403);
        }
    }
}
