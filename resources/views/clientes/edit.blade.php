@extends('adminlte::page')

@section('title', 'Editar Cliente')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="post" action="{{ route('clientes.update', ['cliente' => $cliente->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{ $cliente->nombre }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="ruc">RUC:</label>
            <input type="text" name="ruc" value="{{ $cliente->ruc }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@stop