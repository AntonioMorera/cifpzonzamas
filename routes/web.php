<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Datos;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LibroController;

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
})->middleware('auth');




Route::get('/libro', [LibroController::class, 'index'])->name('libro.index');
Route::get('/libro/create', [LibroController::class, 'create'])->name('libro.create');
Route::post('/libro/create', [LibroController::class, 'create'])->name('libro.create');

Route::get('/libro/edit/{i}', [LibroController::class, 'edit'])->name('libro.edit');
Route::post('/libro/edit', [LibroController::class, 'edit'])->name('libro.edit');

Route::get('/libro/show/{i}', [LibroController::class, 'show'])->name('libro.show');


Route::get('/libro/destroy/{i}', [LibroController::class, 'destroy'])->name('libro.destroy');
Route::post('/libro/destroy', [LibroController::class, 'destroy'])->name('libro.destroy');