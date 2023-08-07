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

<div class="container-detalhes">
    <h2 class="task-title">{{$tarefa->tituloTarefa}}</h2>
    <p class="task-field"><a>Descrição da Tarefa:</a><br>{{$tarefa->descricaoTarefa}}</p>
    <p class="task-field"><a>Data de Criação:</a><br>{{$tarefa->dataCriacao}}</p>
    <p class="task-field"><a>Data de Conclusão:</a><br>{{$tarefa->dataConclusao}}</p>
<p class="task-field"><a>Prioridade:</a><br> <b style="color:{{getPriorityColor($tarefa->prioridade)}}">{{$tarefa->prioridade}}</b></p>
    <p class="task-field"><a>Categoria:</a> <br>{{$tarefa->categoria}}</p>
    <p class="task-field"><a>Notas Adicionais:</a><br> {{$tarefa->notas}}</p>
    <button class="btn-encerrar">Encerrar</button>
  </div>
@endsection