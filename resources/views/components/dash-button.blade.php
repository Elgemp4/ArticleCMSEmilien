@props(["location" => ""])


<button onclick="window.location='{{ route($location) }}'" class="border-[1px] border-rounded text-3xl font-bold p-10 rounded-md shadow-md hover:scale-105 transition-all mx-8">
    {{ $slot }}
</button>