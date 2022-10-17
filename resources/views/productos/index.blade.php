@extends('layouts.base')
@section('cuerpo')
<link rel="stylesheet" href="{{ asset('css/tablas.css') }}">
<h1>Lista de Productos</h1>
<table>
    <tr class="cabecera">
        <td class="centro">#</td>
        <td>Nombre</td>
        <td>Precio</td>
        <td>Codigo</td>
        <td>Descripcion</td>
        <td>Imagen</td>
        <td>Tipo_id</td>
    </tr>
    @foreach ($productos as $producto)
    <tr>
        <td class="centro">{{ $producto->id }}</td>
        <td>{{ $producto->nombre }}</td>
        <td>{{ $producto->precio }}</td>
        <td>{{ $producto->codigo }}</td>
        <td>{{ $producto->descripcion }}</td>
        <td>{{ $producto->imagen }}</td>
        <td>{{ $producto->tipo_id }}</td>
        <td>
            <a href="{{ asset('productos/'.$producto->id.'/edit') }}" class="btn btn-danger">
            Editar
            </a>
            </td>
    </tr>
    @endforeach
</table>
@endsection