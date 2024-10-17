<!-- resources/views/torneos/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Editar Torneo</h1>

    <form action="{{ route('torneos.update', $torneo) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $torneo->nombre) }}" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" name="descripcion" id="descripcion" required>{{ old('descripcion', $torneo->descripcion) }}</textarea>
        </div>

        <div class="form-group">
            <label for="premio">Premio</label>
            <input type="text" class="form-control" name="premio" id="premio" value="{{ old('premio', $torneo->premio) }}" required>
        </div>

        <div class="form-group">
            <label for="lugar">Lugar</label>
            <input type="text" class="form-control" name="lugar" id="lugar" value="{{ old('lugar', $torneo->lugar) }}" required>
        </div>

        <div class="form-group">
            <label for="fecha_inicio">Fecha Inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="{{ old('fecha_inicio', $torneo->fecha_inicio) }}" required>
        </div>

        <div class="form-group">
            <label for="fecha_fin">Fecha Fin</label>
            <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="{{ old('fecha_fin', $torneo->fecha_fin) }}" required>
        </div>

        <div class="form-group">
            <label for="cantidad_equipos">Cantidad de Equipos</label>
            <input type="number" class="form-control" name="cantidad_equipos" id="cantidad_equipos" value="{{ old('cantidad_equipos', $torneo->cantidad_equipos) }}" required min="1">
        </div>

        <div class="form-group">
            <label for="id_usuario">Usuario</label>
            <select class="form-control" name="id_usuario" id="id_usuario" required>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ $usuario->id == $torneo->id_usuario ? 'selected' : '' }}>
                        {{ $usuario->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Actualizar Torneo</button>
    </form>
</div>
@endsection
