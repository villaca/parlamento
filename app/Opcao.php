<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Opcao extends Model
{
    use SoftDeletes;

    protected $table = 'opcoes';
    protected $primaryKey = 'idopcao';
    protected $dates = ['deleted_at'];
}
