@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Grupo de Torneo</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('grupotorneos.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="id_torneo">Seleccionar Torneo:</label>
        <select name="id_torneo" id="id_torneo" class="form-control" required>
            <option value="">Selecciona un torneo</option>
            @foreach ($torneos as $torneo)
                <option value="{{ $torneo->id }}">{{ $torneo->nombre }}</option>
            @endforeach
        </select>
    </div>

    <h3>Selecciona los Equipos:</h3>
    <div class="form-group">
        @foreach ($equipos as $equipo)
            <div class="form-check">
                <input type="checkbox" name="equipos[]" value="{{ $equipo->id }}" class="form-check-input" id="equipo{{ $equipo->id }}">
                <label class="form-check-label" for="equipo{{ $equipo->id }}">{{ $equipo->nombre }}</label>
            </div>
        @endforeach
    </div>

    <button type="submit" class="btn btn-primary">Crear Grupo</button>
</form>
</div>
@endsection
