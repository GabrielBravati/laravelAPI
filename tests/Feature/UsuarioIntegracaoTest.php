<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsuarioIntegracaoTest extends TestCase
{
    use RefreshDatabase; // Reseta o banco antes de cada teste

    /** @test */
    public function cria_usuario_com_sucesso()
    {
        // Envia requisição para criar um novo usuário
        $response = $this->postJson('/api/usuarios', [
            'nome' => 'Carlos Silva',
            'data_nascimento' => '1990-06-15',
            'sexo' => 'M',
            'usuario' => 'carlos90',
            'senha' => 'senha123' // Corrigido para 'senha', se necessário
        ]);

        // Verifica se a resposta foi 201 (Criado) e se o nome foi retornado
        $response->assertStatus(201)
            ->assertJson(['nome' => 'Carlos Silva']);

        // Verifica se o usuário foi salvo no banco de dados
        $this->assertDatabaseHas('usuarios', ['usuario' => 'carlos90']);
    }

    /** @test */
    public function recupera_usuario_com_sucesso()
    {
        // Cria um usuário previamente
        $usuario = Usuario::factory()->create();

        // Envia uma requisição GET para buscar o usuário
        $response = $this->getJson("/api/usuarios/{$usuario->id}");

        // Verifica se a resposta contém os dados do usuário
        $response->assertStatus(200)
            ->assertJson([
                'id' => $usuario->id,
                'nome' => $usuario->nome,
                'usuario' => $usuario->usuario
            ]);
    }

    /** @test */
    public function deleta_usuario_com_sucesso()
    {
        // Cria um usuário previamente
        $usuario = Usuario::factory()->create();

        // Envia uma requisição DELETE para deletar o usuário
        $response = $this->deleteJson("/api/usuarios/{$usuario->id}");

        // Verifica se o status de resposta é 204 (Sem Conteúdo)
        $response->assertStatus(204);

        // Verifica se o usuário foi deletado do banco de dados
        $this->assertDatabaseMissing('usuarios', ['id' => $usuario->id]);
    }

}
