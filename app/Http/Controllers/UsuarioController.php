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
        $usuario = Usuario::findOrFail($id);

        $request->validate([
            'nome' => 'required',
            'data_nascimento' => 'required|date',
            'sexo' => 'required',
            'usuario' => 'required|unique:usuarios,usuario,' . $usuario->id,
            'senha' => 'required',
        ]);

        $usuario->update($request->all());

        return response()->json($usuario, 200);
    }

    public function destroy($id)
    {
        Usuario::findOrFail($id)->delete();

        return response()->json(null, 204);
    }
}
