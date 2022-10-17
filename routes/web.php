<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EnvioController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoController;
use Illuminate\Support\Facades\Route;

Route::get('/',[InicioController::class,'index']);

//rupas para tipos
Route::get('tipos',[TipoController::class,'index']);
Route::get('tipos/create',[TipoController::class,'create']);
Route::post('tipos',[TipoController::class,'store']);
Route::get('tipos/{id}/edit',[TipoController::class,'edit']);
Route::put('tipos/{id}',[TipoController::class,'update']);

//rutas de productos
Route::get('productos',[ProductoController::class,'index']);
Route::get('productos/create',[ProductoController::class,'create']);
Route::post('productos',[ProductoController::class,'store']);
Route::get('productos/{id}/edit',[ProductoController::class,'edit']);

//rutas de clientes
Route::get('clientes',[ClienteController::class,'index']);
Route::get('clientes/create',[ClienteController::class,'create']);
Route::post('clientes',[ClienteController::class,'store']);
Route::get('tipos/{id}/edit',[TipoController::class,'edit']);
Route::get('clientes/{id}/edit',[TipoController::class,'edit']);

//rutas de envios
Route::get('envios',[EnvioController::class,'index']);
Route::get('envios/create',[EnvioController::class,'create']);
Route::post('envios',[EnvioController::class,'store']);
Route::get('envios/{id}/edit',[EnvioController::class,'edit']);