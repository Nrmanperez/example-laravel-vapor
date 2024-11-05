<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', [TextoController::class, 'index'])->name('formulario.hola');

Route::post('/enviar-texto', [TextoController::class, 'store'])->name('enviar.texto');