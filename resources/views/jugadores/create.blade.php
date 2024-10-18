@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-center text-primary mb-8">Crear Nuevo Jugador</h1>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-gradient-to-r from-primary to-secondary text-white py-4 px-6">
            <h2 class="text-2xl font-semibold"><i class="fas fa-user-plus mr-2"></i>Información del Jugador</h2>
        </div>
        <div class="p-6">
            <form action="{{ route('jugadores.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                    </div>
                    <div>
                        <label for="edad" class="block text-sm font-medium text-gray-700 mb-1">Edad</label>
                        <input type="number" name="edad" id="edad" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="posicion" class="block text-sm font-medium text-gray-700 mb-1">Posición</label>
                        <input type="text" name="posicion" id="posicion" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                    </div>
                    <div>
                        <label for="equipo_id" class="block text-sm font-medium text-gray-700 mb-1">Equipo</label>
                        <select name="equipo_id" id="equipo_id" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                            <option value="">Seleccione un equipo</option>
                            @foreach($equipos as $equipo)
                                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="imagen" class="block text-sm font-medium text-gray-700 mb-1">Foto del jugador</label>
                    <input type="file" name="imagen" id="imagen" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" accept="image/*">
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                        Crear Jugador
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
