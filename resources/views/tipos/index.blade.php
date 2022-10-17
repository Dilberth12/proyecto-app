@extends('layouts.base')
@section('cuerpo')
<link rel="stylesheet" href="{{ asset('css/tablas.css') }}">
<h1>Lista de Tipos de Productos</h1>
<br>
<table>
    <tr class="cabecera">
        <td class="centro">#</td>
        <td>Nombre</td>
    </tr>
    @foreach ($tipos as $tipo )
            <tr>
                <td class="centro">{{ $tipo->id }}</td>
                <td>{{ $tipo->nombre }}</td>
                <td>
                    <a href="{{ asset('tipos/'.$tipo->id.'/edit') }}" class="btn btn-danger">
                    Editar
                    </a>
                    </td>
            </tr>
    @endforeach
</table>
@endsection