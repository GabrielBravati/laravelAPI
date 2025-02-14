<?php

// app/Models/Album.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'ano_lancamento',
        'artista',
    ];

    public function faixas()
    {
        return $this->hasMany(Faixa::class);
    }
}