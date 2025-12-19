@extends('layouts.app')

@section('content')
    <h3 class="mb-3">Editar ingreso</h3>

    <form action="{{ route('ingresos.update', $ingreso) }}" method="POST" class="card card-body">
        @csrf
        @method('PUT')
        @include('ingresos._form')
        <div class="mt-3 d-flex gap-2">
            <button class="btn btn-success">Actualizar</button>
            <a class="btn btn-secondary" href="{{ route('ingresos.index') }}">Volver</a>
        </div>
    </form>
@endsection
