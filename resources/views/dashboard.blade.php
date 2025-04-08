<x-app-layout class="flex justify-center items-center flex-1">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm min-h-80 flex items-center sm:rounded-lg p-8">
                <x-dash-button :location="'user.list'">
                    Liste des utilisateurs
                </x-dash-button>
                <x-dash-button :location="'article.create'">
                    Créer une page
                </x-dash-button>
                <x-dash-button :location="'article.list'">
                    Liste des pages
                </x-dash-button>
            </div>
        </div>
    </div>
</x-app-layout>
