@extends('layout')
@section('titulo', 'CriarConta-GestaoTarefas')
@section('styles')
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
@endsection

@section('nav')
<ul  class="navlist">
  <li><a href="#">BEM-VINDO🎊</a></li>
</ul>
@endsection

@section('conteudo')
<div class="container">
<form class="criarConta-form" action="{{route('UsuarioController.store')}}" method="POST" enctype="multipart/form-data">
  @csrf 
  <label for="nome">Nome:</label>
    <input  type="text" id="nome" name="nome" required autofocus>

    <label  for="sobrenome">Sobrenome:</label>
    <input  type="text" id="sobreNome" name="sobreNome" required>

    <label  for="email">Email:</label>
    <input  type="text" id="email" name="email" required>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>

    <input type="submit" value="Enviar">
    <a href="{{route('UsuarioController.entrar')}}">Entrar</a>  
</form>
</div>
@endsection