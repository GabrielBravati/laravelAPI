<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Album;
class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'data_nascimento',
        'sexo',
        'usuario',
        'senha',
    ];

    protected $hidden = [
        'senha',
    ];
}