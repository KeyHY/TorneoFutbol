<!-- resources/views/torneos/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-center text-primary mb-8">Editar Torneo</h1>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-gradient-to-r from-primary to-secondary text-white py-4 px-6">
            <h2 class="text-2xl font-semibold"><i class="fas fa-trophy mr-2"></i>Editar Información del Torneo</h2>
        </div>
        <div class="p-6">
            <form action="{{ route('torneos.update', $torneo->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre del Torneo</label>
                        <input type="text" name="nombre" id="nombre" value="{{ $torneo->nombre }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                    </div>
                    <div>
                        <label for="lugar" class="block text-sm font-medium text-gray-700 mb-1">Lugar</label>
                        <input type="text" name="lugar" id="lugar" value="{{ $torneo->lugar }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="fecha_inicio" class="block text-sm font-medium text-gray-700 mb-1">Fecha de Inicio</label>
                        <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ $torneo->fecha_inicio->format('Y-m-d') }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                    </div>
                    <div>
                        <label for="fecha_fin" class="block text-sm font-medium text-gray-700 mb-1">Fecha de Fin</label>
                        <input type="date" name="fecha_fin" id="fecha_fin" value="{{ $torneo->fecha_fin->format('Y-m-d') }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="premio" class="block text-sm font-medium text-gray-700 mb-1">Premio</label>
                    <input type="text" name="premio" id="premio" value="{{ $torneo->premio }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>
                <div class="mb-6">
                    <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                    <textarea name="descripcion" id="descripcion" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">{{ $torneo->descripcion }}</textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                        Actualizar Torneo
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
