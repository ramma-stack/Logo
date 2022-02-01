<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mens extends Model
{
    protected $table = "Mens";
    protected $casts = [
        'color' => 'array',
        'size' => 'array'
    ];
}
