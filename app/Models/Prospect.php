<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    //
    protected $fillable = [
        'name',
        'phone',
        'estatus'
    ];
    protected $casts = [
        'estatus' => 'boolean',
    ];
}
