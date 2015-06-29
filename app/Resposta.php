<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resposta extends Model
{
    use SoftDeletes;

    protected $table = 'respostas';
    protected $primaryKey = 'idresposta';
    protected $dates = ['deleted_at'];

    public function usuario(){
        return $this->belongsTo('App\Usuario','idusuario','idusuario');
    }

    public function pergunta(){
        return $this->belongsTo('App\Pergunta','idpergunta','idpergunta');
    }
}
