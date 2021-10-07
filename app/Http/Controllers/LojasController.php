<?php

namespace App\Http\Controllers;

use App\Models\Loja;
use Illuminate\Http\Request;
use Exception;

class LojasController extends Controller
{
    public function index()
    {
        $lojas = Loja::get();

        return view('lojas.index', ['lojas' => $lojas]);
    }

    public function create()
    {
        return view('lojas.create');
    }

    public function store(Request $request)
    {

        try {
            Loja::create($request->all());
        } catch (\Throwable $th) {
            throw new Exception("Erro ao inserir loja, verifique as informações enviadas.");
        }

        return redirect()->route('lojas-index');
    }

    public function edit(int $id)
    {
        $loja = Loja::where('id', $id)->first();

        if (empty($loja)) {
            return redirect()->route('lojas-index');
        }

        return view('lojas.edit', ['lojas' => $loja]);
    }

    public function update(Request $request, int $id)
    {
        $dadosAlterados = [
            'nome' => $request->nome,
            'endereco' => $request->endereco,
        ];

        try {
            Loja::where('id', $id)->update($dadosAlterados);
        } catch (\Throwable $th) {
            throw new Exception("Erro ao alterar loja: {$th}");
        }

        return redirect()->route('lojas-index');
    }

    public function destroy(int $id)
    {
        try {
            Loja::where('id', $id)->delete();
        } catch (\Throwable $th) {
            throw new Exception("Erro ao deletar loja: {$th}");
        }

        return redirect()->route('lojas-index');
    }
}
