<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\tarefa;
use Illuminate\Http\Request;
use App\Models\usuario;

class TarefaController extends Controller
{
  public function home($id){

       $usuario = session('usuario_');
       $tarefas = tarefa::where('idUsuario', $id)->get();
      

       return view('home', compact('usuario', 'tarefas'));  
 
    }


    public function criarTarefa($id){

        $usuario = session('usuario_');

        if (!$usuario) {
            abort(404, 'Não encontrado');
            
            return view('entrar');
        }       
    
        if (!isset($usuario->nome)) {
            return view('entrar');
        }
        return view('criarTarefa', compact('usuario'));
    }

    public function detalhes($id, $idTarefa){
        $tarefa = tarefa::where('id', $idTarefa)->first();
        $usuario = session('usuario_');

        return view('detalhesTarefa', compact('usuario', 'tarefa')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        
        $usuario = $request->all();

        $tar = $request->all();
        
       $tar['idUsuario'] = $id;

       $tarefa = tarefa::create($tar);
    
  return redirect()->route('TarefaController.home',['id'=>$id]);

    }

    /**
     * Display the specified resource.
     */
    public function show(tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tarefa $tarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tarefa $tarefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tarefa $tarefa)
    {
        //
    }
}
