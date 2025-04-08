<x-app-layout>
    <x-slot name="header">
        <x-header-button  onclick="window.location='{{ route('dashboard') }}'" class="absolute left-8">
            Retour
        </x-header-button>
        <h2 class="font-extrabold text-4xl text-gray-800 leading-tight">
            Création de page
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center ">
        <x-page-form
            :route="route('article.store')"
            :method="'POST'"
            :buttonText="'Enregistrer'"
        />
    </div>
</x-app-layout>