<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index()
    {
        // Verifica se a requisição quer um retorno em JSON ou uma visão
        if (request()->wantsJson()) {
            return Album::with('faixas')->get();
        }

        // Se não for uma requisição JSON, retorna a visão com todos os álbuns
        $albuns = Album::all();
        return view('albuns.index', compact('albuns'));
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

    public function create()
    {
        return view('albuns.create');
    }
}
