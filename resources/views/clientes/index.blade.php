@extends('layouts.base')
@section('cuerpo')
<link rel="stylesheet" href="{{ asset('css/tablas.css') }}">
<h1>Lista de Clientes</h1>
<table>
    <tr class="cabecera">
        <td class="centro">#</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>DNI</td>
        <td>Foto</td>
    </tr>
    @foreach ($clientes as $cliente)
    <tr>
        <td class="centro">{{ $cliente->id }}</td>
        <td>{{ $cliente->nombre }}</td>
        <td>{{ $cliente->apellido }}</td>
        <td>{{ $cliente->dni }}</td>
        <td>{{ $cliente->foto }}</td>
        <td>
            <a href="{{ asset('clientes/'.$cliente->id.'/edit') }}" class="btn btn-danger">
            Editar
            </a>
            </td>
    </tr>
    @endforeach
</table>
@endsection