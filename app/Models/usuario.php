<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    
    public function tarefa()
    {
        return $this->hasMany(tarefa::class);
    }

    public function usuario($id,$nome,$sobreNome,$email,$senha){
        $this->id=$id;
        $this->nome=$nome;
        $this->sobreNome=$sobreNome;
        $this->email=$email;
        $this->senha=$senha;
    }

    protected $table='usuarios';

   protected $fillable=[
 
    'nome',
    'sobreNome',
    'email',
    'senha'
   ];


}
