<?php

namespace App\Http\Controllers;

use App\Models\Faixa;
use Illuminate\Http\Request;
use App\Models\Album;

class FaixaController extends Controller
{
    public function index()
    {
        if (request()->wantsJson()) {
            return Faixa::all();
        }

        $faixas = Faixa::all();
        return view('faixas.index', compact('faixas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'duracao' => 'required|integer',
            'album_id' => 'required|exists:albuns,id',
            'ordem' => 'required|integer',
        ]);

        $faixa = Faixa::create($request->all());

        return response()->json($faixa, 201);
    }

    public function show($id)
    {
        return Faixa::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $faixa = Faixa::findOrFail($id);

        $request->validate([
            'nome' => 'required',
            'duracao' => 'required|integer',
            'album_id' => 'required|exists:albuns,id',
            'ordem' => 'required|integer',
        ]);

        $faixa->update($request->all());

        return response()->json($faixa, 200);
    }

    public function destroy($id)
    {
        $faixa = Faixa::findOrFail($id);
        $faixa->delete();

        return response()->json(['message' => 'Faixa excluída com sucesso.'], 200);
    }

    public function create()
    {
        $albuns = Album::all();
        return view('faixas.create', compact('albuns'));
    }
}
