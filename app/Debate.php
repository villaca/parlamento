<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Debate extends Model
{
    use SoftDeletes;

    protected $table = 'debates';
    protected $primaryKey = 'iddebate';
    protected $dates = ['deleted_at'];
}
