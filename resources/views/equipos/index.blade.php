@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <h1 class="text-center mb-4 text-primary">Gestión de Equipos</h1>
    
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
                    <h4 class="m-0"><i class="fas fa-users me-2"></i>Lista de Equipos</h4>
                </div>
                <div class="col text-end">
                    <a href="{{ route('equipos.create') }}" class="btn btn-light">
                        <i class="fas fa-plus-circle me-2"></i>Nuevo Equipo
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Ciudad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($equipos as $equipo)
                            <tr>
                                <td>{{ $equipo->id }}</td>
                                <td>{{ $equipo->nombre }}</td>
                                <td>{{ $equipo->ciudad }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que quieres eliminar este equipo?')" data-bs-toggle="tooltip" title="Eliminar">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No hay equipos registrados.</td>
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
