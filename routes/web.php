<?php

use App\Http\Controllers\{
    UsuariosController
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [UsuariosController::class, 'index']);
