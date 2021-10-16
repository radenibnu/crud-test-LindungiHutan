<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class film extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'kd_film',
        'nm_film',
        'genre',
        'artis',
        'produser',
        'pendapatan',
        'nominasi'
    ];
}
