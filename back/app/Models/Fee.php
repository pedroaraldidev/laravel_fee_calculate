<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $table = 'fees';
    protected $fillable = [
        'id',
        'origin_ddd',
        'destination_ddd',
        'value_min'
    ];
}

