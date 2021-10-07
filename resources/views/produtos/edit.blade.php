@extends('layouts.app')

@section('title', 'Edição')

@section('content')

  <div class="container mt-5">
    <h1>Editar produtos</h1>
    <hr>
    <form action="{{route('produtos-update', ['id' => $produtos->id])}}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value=" {{ $produtos->nome }} " placeholder="Digite um nome">
            </div>
            <br>
            <div class="form-group">
                <label for="codigo">Endereço:</label>
                <input type="text" class="form-control" name="codigo" value=" {{ $produtos->codigo }} " placeholder="Digite o código">
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control" name="valor" value=" {{ $produtos->valor }} " placeholder="Digite o valor">
            </div>
            <br>
            <div class="form-group">
                <label for="loja_id">Loja:</label>
                <input type="text" class="form-control" name="loja_id" value=" {{ $produtos->loja_id }} " placeholder="Digite o id da loja">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
            </div>
        </div>
    </form>
  </div>

@endsection