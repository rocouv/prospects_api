<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Table(key: 'prospect_id')]
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
