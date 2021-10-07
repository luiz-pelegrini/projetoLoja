<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Exception;

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
        try {
            Usuario::create($request->all());
        } catch (\Throwable $th) {
            throw new Exception("Erro ao inserir usuário, verifique as informações enviadas.");
        }

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
            'loja_id' => $request->loja_id,
        ];

        try {
            Usuario::where('id', $id)->update($dadosAlterados);
        } catch (\Throwable $th) {
            throw new Exception("Erro ao alterar usuário, verifique as informações enviadas.");
        }

        return redirect()->route('usuarios-index');
    }

    public function destroy(int $id)
    {
        try {
            Usuario::where('id', $id)->delete();
        } catch (\Throwable $th) {
            throw new Exception("Erro ao excluir usuário: {$th}");
        }

        return redirect()->route('usuarios-index');
    }
}
