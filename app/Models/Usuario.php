<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios'; // Força o nome correto da tabela

    protected $fillable = [
        'nome',
        'data_nascimento',
        'sexo',
        'usuario',
        'senha',
        'tipo'
    ];

    protected $hidden = [
        'senha',
    ];

    protected $casts = [
        'data_nascimento' => 'date',
    ];

    // Sempre criptografa a senha antes de salvar
    public function setSenhaAttribute($value)
    {
        $this->attributes['senha'] = bcrypt($value);
    }

    // Permite que o Laravel reconheça o campo "senha" como o campo de senha para autenticação
    public function getAuthPassword()
    {
        return $this->senha;
    }

    public function isAdmin()
    {
        return $this->tipo === 'admin';
    }
}
