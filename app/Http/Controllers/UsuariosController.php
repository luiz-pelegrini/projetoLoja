<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuario = Usuario::get();
        dd($usuario);
        return view('usuarios.index');
    }
}
