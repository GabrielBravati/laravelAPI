<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password = null;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'data_nascimento' => fake()->date(),
            'sexo' => fake()->randomElement(['M', 'F', 'Outro']),
            'usuario' => fake()->unique()->userName(),
            'senha' => static::$password ??= Hash::make('senha123'),
            'remember_token' => Str::random(10),
        ];
    }
}
