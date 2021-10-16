<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class artis extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'kd_artis',
        'nm_artis',
        'jk',
        'bayaran',
        'award',
        'negara'
    ];
}
