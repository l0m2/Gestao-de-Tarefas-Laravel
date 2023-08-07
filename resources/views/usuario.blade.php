@extends('layout')
@section('titulo', 'Home-GestaoTarefas')
@section('styles')
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
@endsection

@section('nav')
<ul  class="navlist">
  <li><a href="{{route('TarefaController.home',['id'=>$usuario->id])}}">HOME</a></li>
  <li><a href="{{route('TarefaController.criarTarefa',['id'=>$usuario->id])}}" >CRIAR-TAREFA</a></li>
  <li><a href="{{route('UsuarioController.usuario',['id'=>$usuario->id])}}" >{{$usuario->nome}}</a></li>
</ul>
@endsection

@section('conteudo')

<div class="container-usuario">
    <h2>Dados do Usuário</h2>
    <div class="user-info">
        <p><strong>Nome:</strong>{{$usuario->nome}}</p>
        <p><strong>Sobrenome:</strong>{{$usuario->sobreNome}}</p>
        <p><strong>Email:</strong>{{$usuario->email}}</p>
        <p><strong>Senha:</strong>{{$usuario->senha}}</p>
    </div>
    <button class="edit-button">Editar</button>
</div>

@endsection