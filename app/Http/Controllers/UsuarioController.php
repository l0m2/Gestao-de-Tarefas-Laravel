<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use App\Mail\NovoUsuarioRegistrado;
use App\Mail\NovoRegistroAdmin;

class UsuarioController extends Controller
{
 
    public function usuario($id){
        $usuario = usuario::where('id', $id)->first();  
    
        return view('usuario', compact('usuario'));
    }

   public function entrar(){
        
        return view('entrar');
     
    }

    public function criarConta(){

        return view('criarConta');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
   public function login(Request $request){

    $usuar = $request->all();

        $usuario = usuario::where('email', $usuar['usuario'])->first();
       // se registro for encontrado
        if ($usuario) {
            
//se a senha estiver certa
            if ($usuar['senha'] === $usuario->senha) {    
                session(['usuario_' => $usuario]);
                return redirect()->route('TarefaController.home',['id'=>$usuario->id]);
        }

        //se a senha nao for igual ao registro encontrado
        else{
            return view('entrar');
        }

    } 
    //se registro nao for encontrado
    else {
           
        return view('entrar');
        }
    

}
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request) 
    {
$usuar = $request->all();

$usuario = usuario::create($usuar);

//$usuarioKey = 'usuario_' . Str::random(10);
/*
Mail::to($usuario->email)->send(new NovoUsuarioRegistrado($usuario));

// Enviar e-mail ao administrador
Mail::to('lmatsinhe378@gmail.com')->send(new NovoRegistroAdmin($usuario));*/

session(['usuario_' => $usuario]);

return redirect()->route('TarefaController.home',['id'=>$usuario->id]);
    }



    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
