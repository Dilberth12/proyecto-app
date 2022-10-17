@extends('layouts.base')
@section('cuerpo')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
<form action="{{ asset('tipos/'.$tipo->id) }}" method="post">
    <h2>Nuevo Tipo</h2>
    @csrf
    @method('put')
    <p>
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="{{ $tipo->nombre }}"><br>
    </p>
    <p>
        <button type="submit">Guardar</button>
    </p>
</form>
@endsection