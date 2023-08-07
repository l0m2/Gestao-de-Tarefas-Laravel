<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\usuario;

class tarefa extends Model
{
    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(usuario::class, 'idUsuario');
    }

protected $table='tarefas';


protected $fillable=[
'tituloTarefa',
'descricaoTarefa',
'dataCriacao',
'senha',
'dataConclusao',
'prioridade',
'categoria',
'notas',
'idUsuario'
];
}
