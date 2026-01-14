<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DatosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::post('/procesar-datos', [DatosController::class, 'procesar']);
