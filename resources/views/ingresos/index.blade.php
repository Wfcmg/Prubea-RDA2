@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Ingresos de vehículos</h3>
        <a href="{{ route('ingresos.create') }}" class="btn btn-primary">Nuevo</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead class="table-dark">
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Cliente</th>
                <th>Teléfono</th>
                <th>Estado</th>
                <th>Ingreso</th>
                <th class="text-end">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @forelse($ingresos as $i)
                <tr>
                    <td>{{ $i->placa }}</td>
                    <td>{{ $i->marca }}</td>
                    <td>{{ $i->modelo }}</td>
                    <td>{{ $i->cliente_nombre }}</td>
                    <td>{{ $i->cliente_telefono }}</td>
                    <td><span class="badge bg-secondary">{{ str_replace('_',' ', $i->estado) }}</span></td>
                    <td>{{ optional($i->fecha_ingreso)->format('Y-m-d H:i') }}</td>
                    <td class="text-end">
                        <a class="btn btn-sm btn-outline-primary" href="{{ route('ingresos.edit', $i) }}">Editar</a>

                        <form action="{{ route('ingresos.destroy', $i) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('¿Marcar como RETIRADO? (no se borra)')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">Retirar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="8" class="text-center py-4">Sin registros</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>

    {{ $ingresos->links() }}
@endsection
