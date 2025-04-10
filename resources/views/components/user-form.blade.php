@props(['route', 'method', 'user' => new \App\Models\User(), 'buttonText'])


<form action="{{ $route }}" method="POST" class="border-[1px] bg-white shadow-md border-gray-300 p-4 rounded-md">
    @csrf
    @method($method)
    <x-input-label for="name" :value="__('Nom')" />
    <x-text-input id="name" name="name" value="{{ $user->name}}" />
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input for="email" type="email" name="email" value="{{ $user->email }}" />
    <x-input-label for="role" :value="__('Rôle')" />
    <x-select-input id="role" name="role">
        <option value="admin" @selected($user->role == "admin") >Admin</option>
        <option value="editor" @selected($user->role == "editor")>Éditeur</option>
        <option value="viewer" @selected($user->role == "viewer")>Lecteur</option>
    </x-select-input>
    <div class="pt-4 flex justify-center">
        <x-primary-button>{{ $buttonText }}</x-primary-button>
    </div>
</form>