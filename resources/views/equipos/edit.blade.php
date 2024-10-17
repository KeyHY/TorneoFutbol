@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Equipo</h1>

    <form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $equipo->nombre }}" required>
        </div>

        <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <input type="text" name="ciudad" class="form-control" value="{{ $equipo->ciudad }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
