<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Exception;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::get();

        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        try {
            Produto::create($request->all());
        } catch (\Throwable $th) {
            throw new Exception("Erro ao inserir produto, verifique as informações enviadas.");
        }

        return redirect()->route('produtos-index');
    }

    public function edit(int $id)
    {
        $loja = Produto::where('id', $id)->first();

        if (empty($loja)) {
            return redirect()->route('produtos-index');
        }

        return view('produtos.edit', ['produtos' => $loja]);
    }

    public function update(Request $request, int $id)
    {
        $dadosAlterados = [
            'nome' => $request->nome,
            'codigo' => $request->codigo,
            'valor' => $request->valor,
            'loja_id' => $request->loja_id,
        ];

        try {
            Produto::where('id', $id)->update($dadosAlterados);
        } catch (\Throwable $th) {
            throw new Exception("Erro ao alterar produto, verifique as informações enviadas.");
        }

        return redirect()->route('produtos-index');
    }

    public function destroy(int $id)
    {
        try {
            Produto::where('id', $id)->delete();
        } catch (\Throwable $th) {
            throw new Exception("Erro ao deletar produto: {$th}");
        }

        return redirect()->route('produtos-index');
    }
}
