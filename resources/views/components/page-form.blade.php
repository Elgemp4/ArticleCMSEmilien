@props(['route', 'method', 'article' => new \App\Models\Article(), 'buttonText'])


<form action="{{ $route }}" method="POST" class="border-[1px] bg-white shadow-md border-gray-300 p-4 rounded-md">
    @csrf
    @method($method)
    <x-input-label for="title" :value="__('Titre')" />
    <x-text-input id="title" name="title" value="{{ $article->title}}" />
    <x-input-label for="title" :value="__('Contenu')" />
    <x-text-area for="content" name="content">{{ $article->content }}</x-text-area>
    <x-input-label for="status" :value="__('Status')" />
    <x-select-input id="status" name="status">
        <option value="draft" @selected($article->status == "draft") >Brouillon</option>
        <option value="published" @selected($article->status == "published")>Publié</option>
    </x-select-input>
    <div class="pt-4 flex justify-center">
        <x-primary-button>{{ $buttonText }}</x-primary-button>
    </div>
</form>