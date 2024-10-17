@extends('layouts.app')

@section('content')
    <h1>{{ $jugador->nombre }}</h1>
    <p>Posición: {{ $jugador->posicion }}</p>
    <p>Equipo ID: {{ $jugador->equipo_id }}</p>
    <p>Fecha de Nacimiento: {{ $jugador->fecha_nacimiento }}</p>
    <p>Número de Camiseta: {{ $jugador->numero_camisa }}</p>
    @if ($jugador->ruta_imagen)
        <img src="{{ Storage::url($jugador->ruta_imagen) }}" alt="Imagen del jugador">
    @endif
@endsection
