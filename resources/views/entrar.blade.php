@extends('layout')
@section('titulo', 'Entrar-GestaoTarefas')
@section('styles')
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
@endsection

@section('nav')
<ul  class="navlist">
  <li><a href="#" >BEM-VINDO🎊</a></li>
</ul>
@endsection


@section('conteudo')
<form class="login-form" action="{{route('UsuarioController.login')}}" method="POST" enctype="multipart/form-data">
  @csrf 
  <label for="usuario">Usuário:</label>
    <input type="text" id="usuario" name="usuario" placeholder="Digite o seu nome/email..." required autofocus>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" placeholder="Digite sua senha..."  required>

    <input type="submit" value="Entrar">
    <a href="{{route('UsuarioController.criarConta')}}">Criar Conta</a>
  </form>
@endsection
