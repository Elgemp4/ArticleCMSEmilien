<x-app-layout>
    <x-slot name="header">
        <x-header-button  onclick="window.location='{{ route('user.list') }}'" class="absolute left-8">
            Retour
        </x-header-button>
        <h2 class="font-extrabold text-4xl text-gray-800 leading-tight">
            Création d'un utilisateur
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center ">
        <x-user-form
            :route="route('user.store')"
            :method="'POST'"
            :buttonText="'Créer'"
        />
    </div>
</x-app-layout>