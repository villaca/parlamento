<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discussao extends Model
{
    use SoftDeletes;

    protected $table = 'discussoes';
    protected $primaryKey = 'iddiscussao';
    protected $dates = ['deleted_at'];

    public function opinioes(){
        return $this->hasMany('App\Opiniao','iddiscussao');
    }

    public function tema(){
        return $this->belongsTo('App\Tema','idtema','idtema');
    }

}
