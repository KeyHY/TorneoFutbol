@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Crear Jugador</h1>
    <form action="{{ route('jugadores.store') }}" method="POST" enctype="multipart/form-data" class="border p-4 bg-light rounded">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="posicion">Posición:</label>
            <input type="text" class="form-control" name="posicion" required>
        </div>

        <div class="form-group">
            <label for="equipo_id">Equipo:</label>
            <select name="equipo_id" class="form-control" required>
                <option value="">Selecciona un equipo</option>
                @foreach($equipos as $equipo)
                    <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" name="fecha_nacimiento" required>
        </div>

        <div class="form-group">
            <label for="numero_camisa">Número de Camiseta:</label>
            <input type="number" class="form-control" name="numero_camisa" required>
        </div>

        <div class="form-group">
            <label for="ruta_imagen">Imagen:</label>
            <input type="file" class="form-control-file" name="ruta_imagen">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
    </form>
</div>
@endsection
