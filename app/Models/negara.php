<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class negara extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'kd_negara',
        'nm_negara'
    ];
}
