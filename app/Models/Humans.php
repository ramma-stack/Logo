<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Humans extends Model
{
    use HasFactory;
    protected $table = "Humans";
    protected $casts = [
        'color' => 'array',
        'size' => 'array'
    ];
}
