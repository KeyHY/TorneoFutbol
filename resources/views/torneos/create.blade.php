<!-- resources/views/torneos/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Crear Nuevo Torneo</strong>
                    </div>
                    <div class="card-body">
                        <form id="crearTorneoForm" action="{{ route('torneos.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="nombre">Nombre del Torneo</label>
                                        <input class="form-control @error('nombre') is-invalid @enderror" id="nombre"
                                            name="nombre" type="text" required value="{{ old('nombre') }}">
                                        @error('nombre')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ruta_imagen">Imagen:</label>
                                <input type="file" class="form-control-file" name="ruta_imagen">
                            </div>
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cantidad_equipos"># de Participantes</label>
                                        <select class="form-control @error('cantidad_equipos') is-invalid @enderror"
                                            id="cantidad_equipos" name="cantidad_equipos" required>
                                            <option value="4" {{ old('cantidad_equipos') == '4' ? 'selected' : '' }}>4
                                            </option>
                                            <option value="8" {{ old('cantidad_equipos') == '8' ? 'selected' : '' }}>8
                                            </option>
                                            <option value="16" {{ old('cantidad_equipos') == '16' ? 'selected' : '' }}>16
                                            </option>
                                            <option value="32" {{ old('cantidad_equipos') == '32' ? 'selected' : '' }}>32
                                            </option>
                                        </select>
                                        @error('cantidad_equipos')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Formato</label>
                                        <div class="radio-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="formato"
                                                    id="eliminacionDirecta" value="eliminacion_directa" {{ old('formato') == 'eliminacion_directa' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="eliminacionDirecta">Eliminación
                                                    directa</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="formato"
                                                    id="dobleEliminacion" value="doble_eliminacion" {{ old('formato') == 'doble_eliminacion' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="dobleEliminacion">Doble
                                                    eliminación</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="formato"
                                                    id="todosContraTodos" value="todos_contra_todos" {{ old('formato') == 'todos_contra_todos' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="todosContraTodos">Todos contra
                                                    todos</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="formato"
                                                    id="gruposEliminatorias" value="grupos_eliminatorias" {{ old('formato') == 'grupos_eliminatorias' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="gruposEliminatorias">Grupos +
                                                    Eliminatorias</label>
                                            </div>
                                        </div>
                                        @error('formato')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="fecha_inicio">Fecha de Inicio</label>
                                        <input class="form-control @error('fecha_inicio') is-invalid @enderror"
                                            id="fecha_inicio" name="fecha_inicio" type="date" required
                                            value="{{ old('fecha_inicio') }}">
                                        @error('fecha_inicio')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="fecha_fin">Fecha de Fin</label>
                                        <input class="form-control @error('fecha_fin') is-invalid @enderror"
                                            id="fecha_fin" name="fecha_fin" type="date" required
                                            value="{{ old('fecha_fin') }}">
                                        @error('fecha_fin')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="premio">Premio</label>
                                        <input class="form-control @error('premio') is-invalid @enderror" id="premio"
                                            name="premio" type="text" required value="{{ old('premio') }}">
                                        @error('premio')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lugar">Lugar</label>
                                        <input class="form-control @error('lugar') is-invalid @enderror" id="lugar"
                                            name="lugar" type="text" required value="{{ old('lugar') }}">
                                        @error('lugar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="descripcion">Descripción</label>
                                        <textarea class="form-control @error('descripcion') is-invalid @enderror"
                                            id="descripcion" name="descripcion" rows="3"
                                            required>{{ old('descripcion') }}</textarea>
                                        @error('descripcion')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm btn-primary" type="submit">Crear Torneo</button>
                                <a href="{{ route('torneos.index') }}" class="btn btn-sm btn-secondary">Volver al
                                    Índice</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <style>
        .fade-in {
            animation: fadeIn ease 1s;
            -webkit-animation: fadeIn ease 1s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .radio-group {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('crearTorneoForm');

            form.addEventListener('submit', function (event) {
                event.preventDefault();
                if (confirm('¿Estás seguro de que quieres crear este torneo?')) {
                    this.submit();
                }
            });

            // Validación del lado del cliente
            form.addEventListener('input', function (event) {
                const input = event.target;
                if (input.hasAttribute('required') && input.value.trim() === '') {
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            // Validación de fechas
            const fechaInicio = document.getElementById('fecha_inicio');
            const fechaFin = document.getElementById('fecha_fin');

            fechaFin.addEventListener('change', function () {
                if (fechaInicio.value && this.value < fechaInicio.value) {
                    this.setCustomValidity('La fecha de fin debe ser posterior a la fecha de inicio');
                } else {
                    this.setCustomValidity('');
                }
            });
        });
    </script>
@endpush