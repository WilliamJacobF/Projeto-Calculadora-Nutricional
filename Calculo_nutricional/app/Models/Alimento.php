<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alimento extends Model
{
    protected $fillable = [
        'Nome',
        'Caloria',
        'Proteina',
        'Carboidrato',
        'Gordura',
    ];
    use HasFactory;
}