<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;

class Tema extends Model
{
    use SoftDeletes;

    protected $table = 'temas';
    protected $primaryKey = 'idtema';
    protected $dates = ['deleted_at'];


    public function admins(){
        return $this->belongsToMany('App\Usuario','usuarios_tem_temas')->withPivot('admin')->withTimestamps();
    }

    public function getAdmins(){
        $users = $this->admins()->filter(function($user){
            return $user->a
        });
        $users->get('admin = 0');
    }
}
