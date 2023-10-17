@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Clientes</h1>
    @stop
    @section('content')
    @if($m != "")
    {{$m}}
    @endif
    <h4>Cargar nuevo cliente</h4>   
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearClienteModal">
        Nuevo Cliente
    </button>
   
    <table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Ruc</th>
            <th>-</th>
        </tr>
    </thead>
    <tbody>
        @if($clientes->isEmpty())
            <tr>
                <td colspan="4">No hay clientes disponibles.</td>
            </tr>
        @else
            @foreach ($clientes as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->nombre }}</td>
                    <td>{{ $c->ruc }}</td>
                    <td>
                        <a href="clientes/{{ $c->id }}/edit" type="button" class="btn btn-primary">
                            Editar
                        </a>
                    </td>
                    <td>
                        <form method="post" action="eliminarcliente/{{ $c->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>


<div class="modal fade" id="crearClienteModal" tabindex="-1" role="dialog" aria-labelledby="crearClienteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crearClienteModalLabel">Cargar nuevo cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('clientes.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="ruc">RUC:</label>
                        <input type="text" name="ruc" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Cliente</button>
                </form>
            </div>
        </div>
    </div>
</div>
    @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop