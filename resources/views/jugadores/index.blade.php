@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <h1 class="text-center mb-4 text-primary">Gestión de Jugadores</h1>
    
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header bg-gradient-primary text-white">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="m-0"><i class="fas fa-user-friends me-2"></i>Lista de Jugadores</h4>
                </div>
                <div class="col text-end">
                    <a href="{{ route('jugadores.create') }}" class="btn btn-light">
                        <i class="fas fa-plus-circle me-2"></i>Nuevo Jugador
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Posición</th>
                            <th scope="col">Equipo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($jugadores as $jugador)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $jugador->ruta_imagen) }}" alt="Foto de {{ $jugador->nombre }}"
                                        class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                                </td>
                                <td>{{ $jugador->nombre }}</td>
                                <td>{{ $jugador->edad }}</td>
                                <td>{{ $jugador->posicion }}</td>
                                <td>{{ $jugador->equipo->nombre_equipo ?? 'Sin equipo' }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('jugadores.show', $jugador) }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip" title="Ver">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('jugadores.edit', $jugador) }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('jugadores.destroy', $jugador) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este jugador?')" data-bs-toggle="tooltip" title="Eliminar">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No hay jugadores registrados.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    body {
        background-color: #f8f9fa;
    }
    .card {
        transition: all 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    }
    .card-header {
        font-weight: bold;
        border-bottom: 0;
    }
    .bg-gradient-primary {
        background: linear-gradient(45deg, #4e73df 0%, #224abe 100%);
    }
    .table th, .table td {
        vertical-align: middle;
    }
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0,0,0,.02);
    }
    .btn-group-sm > .btn, .btn-sm {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem;
    }
    .btn-light {
        color: #4e73df;
        border-color: #ffffff;
        background-color: #ffffff;
    }
    .btn-light:hover {
        color: #ffffff;
        background-color: #4e73df;
        border-color: #4e73df;
    }
</style>
@endpush

@push('scripts')
<script>
    $(function () {
        $('[data-bs-toggle="tooltip"]').tooltip();
    });
</script>
@endpush