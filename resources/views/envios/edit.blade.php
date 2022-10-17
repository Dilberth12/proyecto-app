@extends('layouts.base')
@section('cuerpo')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <form action="{{ asset('envios') }}" method="post">
        <h2>Nuevo Envio</h2>
    @csrf
    <p>
        <label for="">Fecha</label>
        <input type="text" name="fecha" value="{{ $envio->fecha }}"><br>
        <label for="">Cliente_id</label>
        <input type="text" name="cliente_id" value="{{ $envio->cliente_id }}"><br>
        <label for="">Producto_id</label>
        <input type="text" name="producto_id" value="{{ $envio->producto_id }}"><br>
    </p>
    <p>
        <button type="submit">Guardar</button>
    </p>
    </form>
@endsection