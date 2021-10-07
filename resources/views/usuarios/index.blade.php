@extends('layouts.app')

@section('title', 'Usuario')

@section('content')

<h1>Listagem de usuários</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <th>{{$usuario->id}}</th>
            <td>{{$usuario->nome}}</td>
            <td>{{$usuario->email}}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection