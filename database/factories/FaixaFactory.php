<?php

namespace Database\Factories;

use App\Models\Faixa;
use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class FaixaFactory extends Factory
{
    protected $model = Faixa::class;

    public function definition(): array
    {
        return [
            'nome' => $this->faker->word(),  // Nome aleatório da faixa
            'duracao' => $this->faker->numberBetween(200, 600),  // Duração aleatória em segundos
            'album_id' => \App\Models\Album::factory(),  // Relacionamento com um álbum gerado automaticamente
            'ordem' => $this->faker->numberBetween(1, 10),  // Ordem aleatória
        ];
    }
}
