<?php

// app/Models/Faixa.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faixa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'duracao',
        'album_id',
        'ordem',
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}