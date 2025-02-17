<?php
// app/Http/Controllers/UsuarioController.php
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'data_nascimento' => 'required|date',
            'sexo' => 'required',
            'usuario' => 'required|unique:usuarios',
            'senha' => 'required',
        ]);

        $usuario = Usuario::create($request->all());

        return response()->json($usuario, 201);
    }

    public function show($id)
    {
        return Usuario::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        // Encontra o usuário pelo ID, caso contrário, lança um erro 404 automaticamente
        $usuario = Usuario::findOrFail($id);

        // Validação dos dados recebidos na requisição
        $request->validate([
            'nome' => 'required',
            'data_nascimento' => 'required|date',
            'sexo' => 'required',
            'usuario' => 'required|unique:usuarios,usuario,' . $usuario->id, // Permite que o próprio usuário mantenha o nome
            'senha' => 'required',
        ]);

        // Atualiza o usuário com os dados da requisição
        $usuario->update($request->all());

        // Retorna a resposta com o usuário atualizado
        return response()->json([
            'message' => 'Usuário atualizado com sucesso.',
            'data' => $usuario
        ], 200);
    }


    public function destroy($id)
    {
        $usuario = usuario::find/*OrFail*/($id); // retirar o comentário do fail caso lá an frente de erro
        if (!$usuario) {
            return response()->json(['message' => 'Usuário não encontrado'], 404);
        }

        $usuario->delete();

        return response()->json(['message' => 'Usuário excluído com sucesso.'], 200);
    }
}
