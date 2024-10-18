@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-center text-primary mb-8">Agregar Equipo a Torneo</h1>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-gradient-to-r from-primary to-secondary text-white py-4 px-6">
            <h2 class="text-2xl font-semibold"><i class="fas fa-users-cog mr-2"></i>Asignar Equipo a Torneo</h2>
        </div>
        <div class="p-6">
            <form action="{{ route('grupotorneos.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="torneo_id" class="block text-sm font-medium text-gray-700 mb-1">Torneo</label>
                        <select name="torneo_id" id="torneo_id" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                            <option value="">Seleccione un torneo</option>
                            @foreach($torneos as $torneo)
                                <option value="{{ $torneo->id }}">{{ $torneo->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="equipo_id" class="block text-sm font-medium text-gray-700 mb-1">Equipo</label>
                        <select name="equipo_id" id="equipo_id" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                            <option value="">Seleccione un equipo</option>
                            @foreach($equipos as $equipo)
                                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                        Agregar Equipo al Torneo
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
