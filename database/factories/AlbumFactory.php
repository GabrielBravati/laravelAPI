<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    protected $model = Album::class;

    public function definition(): array
    {
        return [
            'nome' => $this->faker->word(),  // Nome aleatório para o álbum
            'ano_lancamento' => $this->faker->year(),  // Ano aleatório de lançamento
            'artista' => $this->faker->name(),  // Nome aleatório para o artista
        ];
    }
}
