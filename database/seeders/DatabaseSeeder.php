<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Album;
use App\Models\Faixa;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Limpa a tabela de usuários antes de inserir novos dados
        \App\Models\Usuario::truncate();

        // Cria um usuário com dados aleatórios
        Usuario::factory()->create();

        // Seeder de álbuns
        $album = Album::factory()->create([
            'nome' => 'Lorem Ipsum',
            'ano_lancamento' => 2025,
            'artista' => 'Aleatorio30',
        ]);

        // Seeder de faixas
        Faixa::factory()->create([
            'nome' => 'Antes',
            'duracao' => 450,  // Duração em segundos
            'album_id' => $album->id,  // Associando ao álbum
            'ordem' => 1,
        ]);
    }
}
