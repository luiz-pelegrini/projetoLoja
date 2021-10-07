@extends('layouts.app')

@section('title', 'Usuario')

@section('content')

  <div class="container mt-5">
    <h1>Inserir um novo usuário</h1>
    <hr>
    <form action="{{route('usuarios-store')}}" method="POST">
    @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite um nome">
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="Digite seu email">
            </div>
            <br>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
  </div>

@endsection