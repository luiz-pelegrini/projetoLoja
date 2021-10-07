@extends('layouts.app')

@section('title', 'Criação')

@section('content')

  <div class="container mt-5">
    <h1>Inserir uma nova loja</h1>
    <hr>
    <form action="{{route('lojas-store')}}" method="POST">
    @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite um nome">
            </div>
            <br>
            <div class="form-group">
                <label for="endereço">Endereço:</label>
                <input type="text" class="form-control" name="endereco" placeholder="Digite seu endereço">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
  </div>

@endsection