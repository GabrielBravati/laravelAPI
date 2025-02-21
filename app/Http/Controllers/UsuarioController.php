<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller

{
    public function index()
    {
        $usuarios=Usuario::all();
        return view('usuarios.index', compact('usuarios'));
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

        $usuario = new Usuario();
        $usuario = $request->all();
        $usuario-> save();;

        return response()->json($usuario, 201);
    }

    public function show($id)
    {
        return Usuario::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        $request->validate([
            'nome' => 'required',
            'data_nascimento' => 'required|date',
            'sexo' => 'required',
            'usuario' => 'required|unique:usuarios,usuario,' . $usuario->id,
            'senha' => 'required', // se o usuario nao quiser trocar a senha, alterar aqui
        ]);

        $usuario->update($request->all());

        return response()->json([
            'message' => 'Usuário atualizado com sucesso.',
            'data' => $usuario
        ], 200);
    }


    public function destroy($id)
    {
        $usuario = usuario::find/*OrFail*/($id); // retirar o comentário do fail caso lá na frente de erro
        if (!$usuario) {
            return response()->json(['message' => 'Usuário não encontrado'], 404);
        }

        $usuario->delete();

        return response()->json(['message' => 'Usuário excluído com sucesso.'], 200);
    }

    public function create(){
        return view('usuarios.create');
    }
    public function edit($id){
        $usuario = Usuario::findOrFail($id);
    return view('usuarios.edit', compact('usuario'));
}
}
