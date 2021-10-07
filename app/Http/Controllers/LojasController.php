<?php

namespace App\Http\Controllers;

use App\Models\Loja;
use Illuminate\Http\Request;

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
        Loja::create($request->all());

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

        Loja::where('id', $id)->update($dadosAlterados);

        return redirect()->route('lojas-index');
    }

    public function destroy(int $id)
    {
        Loja::where('id', $id)->delete();

        return redirect()->route('lojas-index');
    }
}
