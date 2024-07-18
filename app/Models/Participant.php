<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'fecha_nacimiento',
        'genero',
        'email',
        'score',
    ];
}
