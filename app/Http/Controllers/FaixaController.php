<?php
namespace App\Http\Controllers;

use App\Models\Faixa;
use Illuminate\Http\Request;
use App\Models\Album;
class FaixaController extends Controller
{
    public function index()
    {
        return Faixa::all();
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
        $faixa = Faixa::find($id);
        if (!$faixa) {
            return response()->json(['message' => 'Faixa não encontrada'], 404);
        }
        $faixa->delete();

        return response()->json(['message' => 'Faixa excluída com sucesso.'], 200);
    }

    
}