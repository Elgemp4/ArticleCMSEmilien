<x-app-layout class="flex flex-1">
    <x-slot name="header">
        <x-header-button  onclick="window.location='{{ route('dashboard') }}'" class="absolute left-8">
            Retour
        </x-header-button>
        <h2 class="font-extrabold text-4xl text-gray-800 leading-tight">
            Édition de le page {{ $article->title }}
        </h2>
    </x-slot>

    <div class="py-12 flex flex-col justify-center  items-center flex-1">
        <x-page-render :article="$article" />
    </div>
</x-app-layout>