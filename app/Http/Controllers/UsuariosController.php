<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::get();

        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        Usuario::create($request->all());

        return redirect()->route('usuarios-index');
    }

    public function edit(int $id)
    {
        $usuario = Usuario::where('id', $id)->first();

        if (empty($usuario)) {
            return redirect()->route('usuarios-index');
        }

        return view('usuarios.edit', ['usuarios' => $usuario]);
    }

    public function update(Request $request, int $id)
    {
        $dadosAlterados = [
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
        ];
        Usuario::where('id', $id)->update($dadosAlterados);

        return redirect()->route('usuarios-index');
    }

    public function destroy(int $id)
    {
        Usuario::where('id', $id)->delete();

        return redirect()->route('usuarios-index');
    }
}
