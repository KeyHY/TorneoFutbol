<!-- resources/views/grupotorneos/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Grupo de Torneo</h1>

    <form action="{{ route('grupotorneos.update', $grupoTorneo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="id_torneo" class="form-label">Torneo</label>
            <select name="id_torneo" id="id_torneo" class="form-select" required>
                <option value="">Selecciona un torneo</option>
                @foreach ($torneos as $torneo)
                    <option value="{{ $torneo->id }}" {{ $torneo->id == $grupoTorneo->id_torneo ? 'selected' : '' }}>
                        {{ $torneo->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Equipos</label><br>
            @foreach ($equipos as $equipo)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="equipos[]" value="{{ $equipo->id }}" id="equipo_{{ $equipo->id }}" 
                        {{ $grupoTorneo->equipos->contains($equipo->id) ? 'checked' : '' }}>
                    <label class="form-check-label" for="equipo_{{ $equipo->id }}">
                        {{ $equipo->nombre }}
                    </label>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
