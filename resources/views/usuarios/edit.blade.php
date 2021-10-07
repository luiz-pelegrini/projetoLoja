@extends('layouts.app')

@section('title', 'Edição')

@section('content')

  <div class="container mt-5">
    <h1>Editar usuário</h1>
    <hr>
    <form action="{{route('usuarios-update', ['id' => $usuarios->id])}}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value=" {{ $usuarios->nome }} " placeholder="Digite um nome">
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value=" {{ $usuarios->email }} " placeholder="Digite seu email">
            </div>
            <br>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" name="senha" value=" {{ $usuarios->senha }} " placeholder="Digite sua senha">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
            </div>
        </div>
    </form>
  </div>

@endsection