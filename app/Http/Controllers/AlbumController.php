<?php

// app/Http/Controllers/AlbumController.php
namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        return Album::with('faixas')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'ano_lancamento' => 'required|integer',
            'artista' => 'required',
        ]);

        $album = Album::create($request->all());

        return response()->json($album, 201);
    }

    public function show($id)
    {
        return Album::with('faixas')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $album = Album::findOrFail($id);

        $request->validate([
            'nome' => 'required',
            'ano_lancamento' => 'required|integer',
            'artista' => 'required',
        ]);

        $album->update($request->all());

        return response()->json($album, 200);
    }

    public function destroy($id)
    {
        $album = Album::find($id);
        if (!$album) {
            return response()->json(['message' => 'Álbum não encontrado'], 404);
        }

        $album->delete();

        return response()->json(['message' => 'Álbum excluído com sucesso.'], 200);
    }
}