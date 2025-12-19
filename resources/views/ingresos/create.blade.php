@extends('layouts.app')

@section('content')
    <h3 class="mb-3">Nuevo ingreso</h3>

    <form action="{{ route('ingresos.store') }}" method="POST" class="card card-body">
        @csrf
        @include('ingresos._form')
        <div class="mt-3 d-flex gap-2">
            <button class="btn btn-success">Guardar</button>
            <a class="btn btn-secondary" href="{{ route('ingresos.index') }}">Volver</a>
        </div>
    </form>
@endsection
