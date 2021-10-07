<?php

use App\Http\Controllers\{
    UsuariosController,
    LojasController,
    ProdutosController,
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('usuarios')->group(function(){
    Route::get('/', [UsuariosController::class, 'index'])->name('usuarios-index');
    Route::get('/create', [UsuariosController::class, 'create'])->name('usuarios-create');
    Route::post('/', [UsuariosController::class, 'store'])->name('usuarios-store');
    Route::get('/{id}/edit', [UsuariosController::class, 'edit'])->where('id', '[0-9]+')->name('usuarios-edit');
    Route::put('/{id}', [UsuariosController::class, 'update'])->where('id', '[0-9]+')->name('usuarios-update');
    Route::delete('/{id}', [UsuariosController::class, 'destroy'])->where('id', '[0-9]+')->name('usuarios-destroy');
});

Route::prefix('lojas')->group(function(){
    Route::get('/', [LojasController::class, 'index'])->name('lojas-index');
    Route::get('/create', [LojasController::class, 'create'])->name('lojas-create');
    Route::post('/', [LojasController::class, 'store'])->name('lojas-store');
    Route::get('/{id}/edit', [LojasController::class, 'edit'])->where('id', '[0-9]+')->name('lojas-edit');
    Route::put('/{id}', [LojasController::class, 'update'])->where('id', '[0-9]+')->name('lojas-update');
    Route::delete('/{id}', [LojasController::class, 'destroy'])->where('id', '[0-9]+')->name('lojas-destroy');
});

Route::prefix('produtos')->group(function(){
    Route::get('/', [ProdutosController::class, 'index'])->name('produtos-index');
    Route::get('/create', [ProdutosController::class, 'create'])->name('produtos-create');
    Route::post('/', [ProdutosController::class, 'store'])->name('produtos-store');
    Route::get('/{id}/edit', [ProdutosController::class, 'edit'])->where('id', '[0-9]+')->name('produtos-edit');
    Route::put('/{id}', [ProdutosController::class, 'update'])->where('id', '[0-9]+')->name('produtos-update');
    Route::delete('/{id}', [ProdutosController::class, 'destroy'])->where('id', '[0-9]+')->name('produtos-destroy');
});

Route::fallback(function() {
    return "Erro!";
});