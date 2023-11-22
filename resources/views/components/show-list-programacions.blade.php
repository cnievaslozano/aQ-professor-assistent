@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <div class="bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Detalles de la Programació</h2>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <p class="text-gray-500">ID de la Programació:</p>
                <p class="font-bold">{{ $programacio->id }}</p>
            </div>

            <div>
                <p class="text-gray-500">Any Acadèmic:</p>
                <p class="font-bold">{{ $programacio->any_academic }}</p>
            </div>

            <div>
                <p class="text-gray-500">Descripció:</p>
                <p class="font-bold">{{ $programacio->descripcio }}</p>
            </div>

            <div>
                <p class="text-gray-500">Usuari Assignat:</p>
                <p class="font-bold">{{ $programacio->usuari->nom }}</p>
            </div>
        </div>

        <div class="mt-8">
            <h3 class="text-xl font-semibold mb-4">Activitats d’Ensenyament-Aprenentatge</h3>

            @if ($programacio->activitats->count() > 0)
            <ul>
                @foreach ($programacio->activitats as $activitat)
                <li>{{ $activitat->titol }} - {{ $activitat->descripcio }}</li>
                @endforeach
            </ul>
            @else
            <p>No hay activitats disponibles.</p>
            @endif
        </div>
    </div>
</div>
@endsectionu