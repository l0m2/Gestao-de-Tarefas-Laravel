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
@if($tarefas) 
<div class="container-home{{ count($tarefas) === 1 ? ' single-task' : ''}}">
@foreach($tarefas as $tarefa)
  <div class="task">
    <h2 class="task-title">{{$tarefa->tituloTarefa}}</h2>
    <p class="task-date">Data de Início: {{$tarefa->dataCriacao}}</p>
    <p class="task-date">Data de Conclusão: {{$tarefa->dataConclusao}}</p>
<p class="task-priority">Prioridade: <b style="color:{{getPriorityColor($tarefa->prioridade)}}">{{$tarefa->prioridade}}</b></p>
    <a href="{{route('TarefaController.detalhes',['id'=>$usuario->id, 'idTarefa'=>$tarefa->id])}}" class="btn-saber-mais">➕</a>
  </div>
  @endforeach
</div>
@else 
  OLA Sr/a {{$usuario->nome}} {{$usuario->sobreNome}},
  Você ainda não criou nenhuma tarefa. Para criar uma tarefa&nbsp; 
<a href="{{route('TarefaController.criarTarefa',['id'=>$usuario->id])}}">clique aqui❗</a>
@endif
@endsection