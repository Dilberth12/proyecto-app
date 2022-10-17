@extends('layouts.base')
@section('cuerpo')
<link rel="stylesheet" href="{{ asset('css/tablas.css') }}">
<h1>Lista de Envios</h1>
<br>
<table>
    <tr class="cabecera">
        <td class="centro">#</td>
        <td>Fecha</td>
        <td>Cliente_id</td>
        <td>Producto_id</td>
    </tr>
    @foreach ($envios as $envio)
    <tr>
        <td class="centro">{{ $envio->id }}</td>
        <td>{{ $envio->fecha }}</td>
        <td>{{ $envio->cliente_id }}</td>
        <td>{{ $envio->producto_id }}</td>
        <td>
            <a href="{{ asset('envios/'.$envio->id.'/edit') }}" class="btn btn-danger">
            Editar
            </a>
            </td>
    </tr>
    @endforeach
</table>
@endsection