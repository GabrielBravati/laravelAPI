<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),  // Nome gerado automaticamente
            'data_nascimento' => $this->faker->date('Y-m-d', '2000-01-01'),  // Data de nascimento aleatória
            'sexo' => $this->faker->randomElement(['masculino', 'feminino']),  // Sexo aleatório
            'usuario' => $this->faker->unique()->userName(),  // Nome de usuário único gerado automaticamente
            'senha' => $this->faker->password(),  // Senha gerada aleatoriamente
        ];
    }
}
