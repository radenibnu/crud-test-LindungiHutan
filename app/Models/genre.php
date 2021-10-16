<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class genre extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'kd_genre',
        'nm_genre'
    ];
}
