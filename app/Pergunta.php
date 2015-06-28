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
}
