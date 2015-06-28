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
}
