<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Opiniao extends Model
{
    use SoftDeletes;

    protected $table = 'opinioes';
    protected $primaryKey = 'idopiniao';
    protected $dates = ['deleted_at'];

    public function discussao(){
        return $this->belongsTo('App\Discussao','idiscussao','idiscussao');
    }

    public function usuario(){
        return $this->belongsToMany('App\Usuario','usuarios_tem_opinioes','idopiniao','idusuario');
    }

}
