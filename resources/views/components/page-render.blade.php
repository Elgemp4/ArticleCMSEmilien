@props(['article'])

<main class="flex flex-col max-w-5xl p-4 bg-white shadow-md border-gray-300 rounded-md w-full flex-grow">
    <h2 class="text-5xl font-bold self-center">{{ $article->title }}</h2>
    <p class="text-slate-400 self-center">Créé le {{ $article->created_at->format("Y-m-d") }}</p>
    <p>{{ $article->content }}</p>
</main>