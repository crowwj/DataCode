<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HackatonRegistro extends Model
{
    protected $fillable = [
        'user_id',
        'semestre',
        'grupo',
        'region',
    ];
}
