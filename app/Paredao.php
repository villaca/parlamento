<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paredao extends Model
{
    use SoftDeletes;

    protected $table = 'paredoes';
    protected $primaryKey = 'idparedao';
    protected $dates = ['deleted_at'];
}
