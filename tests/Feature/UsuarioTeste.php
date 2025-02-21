<?php

use Tests\TestCase;
use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsuarioTest extends TestCase
{
    use RefreshDatabase; // Reseta o banco antes de cada teste

    /** @test */
    public function cria_um_usuario_com_sucesso()
    {
        $response = $this->postJson('/api/usuarios', [
            'nome' => 'João Silva',
            'data_nascimento' => '1990-05-10',
            'sexo' => 'M',
            'usuario' => 'joaosilva',
            'password' => 'senha123'
        ]);

        $response->assertStatus(201) // Verifica se criou corretamente
                 ->assertJson(['nome' => 'João Silva']);
        
        $this->assertDatabaseHas('usuarios', ['usuario' => 'joaosilva']);
    }
}
