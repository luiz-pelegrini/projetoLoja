<?php

use App\Http\Controllers\{
    UsuariosController
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/usuarios', [UsuariosController::class, 'index']);

Route::prefix('usuarios')->group(function(){
    Route::get('/', [UsuariosController::class, 'index'])->name('usuarios-index');
    Route::get('/create', [UsuariosController::class, 'create'])->name('usuarios-create');
    Route::post('/', [UsuariosController::class, 'store'])->name('usuarios-store');
});

Route::fallback(function() {
    return "Erro!";
});