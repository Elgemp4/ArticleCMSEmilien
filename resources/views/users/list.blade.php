<x-app-layout>
    <x-slot name="header">
        <x-header-button  onclick="window.location='{{ route('dashboard') }}'" class="absolute left-8">
            Retour au dashboard
        </x-header-button>
        <h2 class="font-extrabold text-4xl text-gray-800 leading-tight">
            Liste des utilisateur
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center  items-center flex-col ">
        <x-primary-button class="mb-8" onclick="document.location='{{ route('user.create') }}'">➕ Créer un nouvel utilisateur</x-primary-button>
        <table class="table-auto mb-8">
            <thead>
                <tr class="bg-slate-600 text-white font-bold">
                    <th class="py-2 px-8">Nom</th>
                    <th class="py-2 px-8">Email</th>
                    <th class="py-2 px-8">Rôle</th>
                    <th class="py-2 px-8">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="border-b border-gray-300 bg-slate-200">
                        <td class="py-2 px-8 text-center" >{{ $user->name }}</td>
                        <td class="py-2 px-8 text-center" >{{ $user->email }}</td>
                        <td class="py-2 px-8 text-center" >{{ $user->getRoleNames()->first() }}</td>
                        <td class="py-2 px-8 text-center flex items-center gap-4">
                            <form action="{{ route('user.edit', ['user' => $user]) }}" method="GET">
                                <x-primary-button>🖊️ Editer</x-primary-button>
                            </form>
                            <form action="{{ route('user.delete', ['user' => $user->id]) }}" method="POST">
                                @method("DELETE")
                                @csrf
                                <x-primary-button>🗑️ Supprimer</x-primary-button>
                            </form>
                            
                            
                        </td>
                    </tr>  
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</x-app-layout>