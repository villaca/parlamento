<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tema extends Model
{
    use SoftDeletes;

    protected $table = 'temas';
    protected $primaryKey = 'idtema';
    protected $dates = ['deleted_at'];


    public function admins(){
        return $this->belongsToMany('App\Usuario','usuarios_tem_temas','idtema','idusuario')->withPivot('admin')->withTimestamps();
    }

    public function scopeAdmin($query){
        return $query->where('admin', 1);
    }

    public function paredoes(){
        return $this->hasMany('App\Paredao','idTema');
    }

    public function debates(){
        return $this->hasMany('App\Debate','idTema');
    }

    public function discussoes(){
        return $this->hasMany('App\Discussao','idTema');
    }

    public function perguntas(){
        return $this->hasMany('App\Pergunta','idTema');
    }
}
