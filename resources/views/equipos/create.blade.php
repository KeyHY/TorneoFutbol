@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Equipo</h1>

    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <input type="text" name="ciudad" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="ruta_imagen">Imagen:</label>
            <input type="file" class="form-control-file" name="ruta_imagen">
        </div>

        <button type="submit" class="btn btn-primary">Agregar</button>
        <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
