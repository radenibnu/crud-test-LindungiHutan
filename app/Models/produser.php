<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class produser extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'kd_produser',
        'nm_produser',
        'international'
    ];
}
