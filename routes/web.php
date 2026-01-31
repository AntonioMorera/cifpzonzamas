<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Datos;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');

Route::get('/users', [UserController::class, 'index'])->name('users.index');


Route::get('/libro', [LibroController::class, 'index'])->name('libro.index');
Route::get('/libro/create', [LibroController::class, 'create'])->name('libro.create');
Route::post('/libro/create', [LibroController::class, 'create'])->name('libro.create');

// Mostrar formulario de edición
Route::get('/libro/edit/{i}', [LibroController::class, 'edit'])->name('libro.edit');
Route::post('/libro/edit/{i}', [LibroController::class, 'edit'])->name('libro.edit.post');



Route::get('/libro/show/{i}', [LibroController::class, 'show'])->name('libro.show');


Route::get('/libro/destroy/{i}', [LibroController::class, 'destroy'])->name('libro.destroy');
Route::post('/libro/destroy', [LibroController::class, 'destroy'])->name('libro.destroy');