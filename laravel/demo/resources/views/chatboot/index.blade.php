<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data assistant</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-950 text-slate-100">
    <main class="mx-auto flex min-h-screen max-w-5xl flex-col px-5 py-8 sm:px-8">
        <header class="mb-8 flex items-start justify-between gap-4">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-cyan-300">Store intelligence</p>
                <h1 class="mt-2 text-3xl font-semibold tracking-tight">Ask your data assistant</h1>
                <p class="mt-2 max-w-xl text-slate-400">Ask about the data available to your account, inspect an image,
                    or generate a new image.</p>
            </div>
            <span class="rounded-full border border-slate-700 px-3 py-1 text-xs text-slate-400">{{ auth()->user()->role
                }}</span>
        </header>

        <section id="conversation"
            class="flex-1 space-y-4 rounded-2xl border border-slate-800 bg-slate-900/70 p-4 sm:p-6">
            <div class="max-w-2xl rounded-xl bg-slate-800 p-4 text-slate-300">Hello {{ auth()->user()->name }}. What
                would you like to know?</div>
        </section>

        <form id="chat-form" class="mt-5 rounded-2xl border border-slate-800 bg-slate-900 p-4"
            enctype="multipart/form-data">
            <textarea id="message" name="message" required maxlength="4000" rows="3"
                class="w-full resize-y rounded-xl border border-slate-700 bg-slate-950 p-3 text-slate-100 outline-none focus:border-cyan-400"
                placeholder="Ask about products, categories, or your orders..."></textarea>
            <div class="mt-3 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-wrap items-center gap-3 text-sm text-slate-400">
                    <label class="cursor-pointer rounded-lg border border-slate-700 px-3 py-2 hover:border-cyan-400">
                        Attach image
                        <input id="image" name="image" type="file" accept="image/*" class="hidden">
                    </label>
                    <select id="response_type" name="response_type"
                        class="rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-slate-200">
                        <option value="text">Text response</option>
                        <option value="image">Image response</option>
                    </select>
                    <span id="file-name" class="max-w-40 truncate"></span>
                </div>
                <button class="rounded-lg bg-cyan-400 px-5 py-2 font-semibold text-slate-950 hover:bg-cyan-300"
                    type="submit">Send</button>
            </div>
        </form>
    </main>
    <script>
        const form = document.getElementById('chat-form');
        const conversation = document.getElementById('conversation');
        const imageInput = document.getElementById('image');
        const fileName = document.getElementById('file-name');

        imageInput.addEventListener('change', () => {
            fileName.textContent = imageInput.files[0]?.name ?? '';
        });

        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            const data = new FormData(form);
            const question = document.createElement('div');
            question.className = 'ml-auto max-w-2xl rounded-xl bg-cyan-400 p-4 text-slate-950';
            question.textContent = data.get('message');
            conversation.append(question);

            const pending = document.createElement('div');
            pending.className = 'max-w-2xl rounded-xl bg-slate-800 p-4 text-slate-400';
            pending.textContent = 'Thinking...';
            conversation.append(pending);
            form.querySelector('button').disabled = true;

            try {
                const response = await fetch('{{ route('chatbot.respond') }}', {
                    method: 'POST',
                    headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content, 'Accept': 'application/json' },
                    body: data,
                });
                const result = await response.json();
                if (!response.ok) throw new Error(result.message ?? 'The request failed.');
                if (result.type === 'image') {
                    const image = document.createElement('img');
                    image.src = result.content;
                    image.alt = 'Generated response';
                    image.className = 'max-w-full rounded-lg';
                    pending.replaceChildren(image);
                } else {
                    pending.textContent = result.content;
                }
                pending.classList.remove('text-slate-400');
                form.reset();
                fileName.textContent = '';
            } catch (error) {
                pending.textContent = error.message;
                pending.classList.add('text-rose-300');
            } finally {
                form.querySelector('button').disabled = false;
            }
        });
    </script>
</body>

</html>