@extends('layouts.base')
@section('cuerpo')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
<form action="{{ asset('clientes') }}" method="post">
    <h2>Nuevo Cliente</h2>
    @csrf
    <p>
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="{{ $cliente->nombre }}"><br>
        <label for="">Apellido</label>
        <input type="text" name="apellido" value="{{ $cliente->apellido }}"><br>
        <label for="">DNI</label>
        <input type="text" name="dni" value="{{ $cliente->dni }}"><br>
        <label for="">Foto</label>
        <input type="text" name="foto" value="{{ $cliente->foto }}"><br>
    </p>
    <p>
        <button type="submit">Guardar</button>
    </p>
</form>
@endsection