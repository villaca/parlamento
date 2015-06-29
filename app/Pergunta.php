<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pergunta extends Model
{
    use SoftDeletes;

    protected $table = 'perguntas';
    protected $primaryKey = 'idpergunta';
    protected $dates = ['deleted_at'];

    public function opcoes(){
        return $this->hasMany('App\Opcao','idpergunta');
    }

    public function respostas(){
        return $this->hasMany('App\Resposta','idpergunta');
    }

    public function tema(){
        return $this->belongsTo('App\Tema','idtema','idtema');
    }
}
