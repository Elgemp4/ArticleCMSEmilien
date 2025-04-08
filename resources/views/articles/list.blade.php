<x-app-layout>
    <x-slot name="header">
        <x-header-button  onclick="window.location='{{ route('dashboard') }}'" class="absolute left-8">
            Retour au dashboard
        </x-header-button>
        <h2 class="font-extrabold text-4xl text-gray-800 leading-tight">
            Liste des pages
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center  items-center flex-col ">
        <x-primary-button class="mb-8" onclick="document.location='{{ route('article.create') }}'">➕ Créer une nouvelle page</x-primary-button>
        <table class="table-auto">
            <thead>
                <tr class="bg-slate-600 text-white font-bold">
                    <th class="py-2 px-8">Titre</th>
                    <th class="py-2 px-8">Status</th>
                    <th class="py-2 px-8">Date de création</th>
                    <th class="py-2 px-8">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr class="border-b border-gray-300 bg-slate-200">
                        <td class="py-2 px-8 text-center" >{{ $article->title }}</td>
                        <td class="py-2 px-8 text-center" >{{ $article->status }}</td>
                        <td class="py-2 px-8 text-center" >{{ $article->created_at->format("Y-m-d") }}</td>
                        <td class="py-2 px-8 text-center flex items-center gap-4">
                            <form action="{{ route('article.edit', ['article' => $article->id]) }}" method="GET">
                                <x-primary-button>🖊️ Editer</x-primary-button>
                            </form>
                            <form action="{{ route('article.delete', ['article' => $article->id]) }}" method="POST">
                                @method("DELETE")
                                @csrf
                                <x-primary-button>🗑️ Supprimer</x-primary-button>
                            </form>
                            
                            
                        </td>
                    </tr>  
                @endforeach
            </tbody>
            
            
        </table>
    </div>
</x-app-layout>