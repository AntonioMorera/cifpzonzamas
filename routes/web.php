<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\DatosController;
use App\Http\Controllers\UserController;

Route::get('/', function () {

    return view('welcome');
});


Route::get('/login', function () {

    return view('welcome');
})->name('login');

Route::get('/usuario/{id}', function ($id) {

    return "hola usuario " . $id;
});


Route::get('/contacto', function () {

    return "Página de contacto";
})->name('contacto');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/usuarios', function () {
    // Tu lógica aquí
    });

    Route::get('/admin/configuracion ', function () {
    // Tu lógica aquí
    });
});



Route::post('/procesar-datos', [DatosController::class, 'procesar']);
Route::get('/procesar-datos', [DatosController::class, 'procesar']);


Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);