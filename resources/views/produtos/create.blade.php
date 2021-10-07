@extends('layouts.app')

@section('title', 'Criação')

@section('content')

  <div class="container mt-5">
    <h1>Inserir um novo produto</h1>
    <hr>
    <form action="{{route('produtos-store')}}" method="POST">
    @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite um nome">
            </div>
            <br>
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" name="codigo" placeholder="Digite o código do produto">
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control" name="valor" placeholder="Digite o valor do produto">
            </div>
            <br>
            <div class="form-group">
                <label for="loja_id">Loja:</label>
                <input type="text" class="form-control" name="loja_id" placeholder="Digite a loja que o produto se refere">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
  </div>

@endsection