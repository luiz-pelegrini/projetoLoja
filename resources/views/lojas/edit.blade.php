@extends('layouts.app')

@section('title', 'Edição')

@section('content')

  <div class="container mt-5">
    <h1>Editar Loja</h1>
    <hr>
    <form action="{{route('lojas-update', ['id' => $lojas->id])}}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value=" {{ $lojas->nome }} " placeholder="Digite um nome">
            </div>
            <br>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" name="endereco" value=" {{ $lojas->endereco }} " placeholder="Digite seu endereço">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
            </div>
        </div>
    </form>
  </div>

@endsection