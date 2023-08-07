@extends('layout')
@section('titulo', 'CriarTarefa-GestaoTarefas')
@section('styles')
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
@endsection


@section('nav')
<ul  class="navlist">
  <li><a href="{{route('TarefaController.home',['id'=>$usuario->id])}}">HOME</a></li>
  <li><a href="{{route('TarefaController.criarTarefa',['id'=>$usuario->id])}}"> CRIAR-TAREFA</a></li>
  <li><a href="{{route('UsuarioController.usuario',['id'=>$usuario->id])}}" >{{$usuario->nome}}</a></li>
</ul>
@endsection

@section('conteudo')

<div class="container">
    <form action="{{route('TarefaController.store',['id'=>$usuario->id])}}" method="POST" enctype="multipart/form-data">
      @csrf
      <label for="titulo">Título da Tarefa:</label>
      <input type="text" id="tituloTarefa" name="tituloTarefa" required autofocus>

      <label for="descricao">Descrição da Tarefa:</label>
      <textarea id="descricaoTarefa" name="descricaoTarefa" rows="4" required></textarea>

      <label for="data_conclusao">Data de Inicio</label>
      <input type="date" id="dataCriacao" name="dataCriacao">

      <label for="data_conclusao">Data de Conclusão:</label>
      <input type="date" id="dataConclusao" name="dataConclusao">

      <label>Prioridade:</label>
      <div class="radio-buttons">
        <input type="radio" id="baixa" name="prioridade" value="Baixa" required>
        <label for="baixa">Baixa</label>

        <input type="radio" id="media" name="prioridade" value="Média" checked>
        <label for="media">Média</label>

        <input type="radio" id="alta" name="prioridade" value="Alta">
        <label for="alta">Alta</label>
      </div>

      <label>Categoria:</label>
      <div class="radio-buttons">
        <input type="radio" id="trabalho" name="categoria" value="Trabalho" required>
        <label for="trabalho">Trabalho</label>

        <input type="radio" id="estudo" name="categoria" value="Estudo">
        <label for="estudo">Estudo</label>

        <input type="radio" id="pessoal" name="categoria" value="Pessoal" checked>
        <label for="pessoal">Pessoal</label>

        <input type="radio" id="saude" name="categoria" value="Saúde">
        <label for="saude">Saúde</label>

        <input type="radio" id="outros" name="categoria" value="Outros">
        <label for="outros">Outros</label>
      </div>

      <label for="notas">Notas Adicionais:</label>
      <textarea id="notas" name="notas" rows="4"></textarea>   

      <input type="hidden" name="idUsuario" value="{{$usuario->id}}"> 
      
      <input type="submit" value="Salvar">
    </form>
  </div>
@endsection

