@extends('layouts.base')
@section('cuerpo')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
<form action="{{ asset('tipos') }}" method="post">
    <h2>Nuevo Tipo</h2>
    @csrf
    <p>
        <label for="">Nombre</label>
        <input type="text" name="nombre"><br>
    </p>
    <p>
        <button type="submit">Guardar</button>
    </p>
</form>
@endsection