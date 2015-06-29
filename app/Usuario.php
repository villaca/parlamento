<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use SoftDeletes;

    protected $table = 'usuarios';
    protected $primaryKey = 'idusuario';
    protected $dates = ['deleted_at'];


    public function temas(){
        return $this->belongsToMany('App\Tema','usuarios_tem_temas','idusuario','idtema')->withPivot('admin')->withTimestamps();
    }

    public function scopeAdmin($query){
        return $query->where('admin', 1);
    }

    public function opinioes(){
        return $this->belongsToMany('App\Opiniao','usuarios_tem_opinioes','idusuario','idopiniao');
    }

}
