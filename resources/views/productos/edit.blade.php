@extends('layouts.base')
@section('cuerpo')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
<form action="{{ asset('productos') }}" method="post">
    <h2>Tu Productito mas na Agregalo</h2><small>sucribete</small>
@csrf
<p>
    <label for="">Nombre</label>
    <input type="text" name="nombre" value="{{ $producto->nombre }}"><br>
    <label for="">Precio</label>
    <input type="text" name="precio"><br>
    <label for="">Codigo</label>
    <input type="text" name="codigo"><br>
    <label for="">Descripcion</label>
    <input type="text" name="descripcion"><br>
    <label for="">Imagen</label>
    <input type="text" name="imagen"><br>
    <label for="">Tipo_id</label>
    <select name="tipo_id">
        @foreach ($tipos as $tipo)
            <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
        @endforeach
    </select>
</p>
<p>
    <button type="submit">Guardar</button>
</p>
</form>
@endsection