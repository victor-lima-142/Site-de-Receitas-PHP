<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Receita;
use Error;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ReceitaController extends Controller
{
    public function index()
    {
        $listagem = Receita::all();
        return view('index', compact('listagem'));
    }

    public function store(Request $request)
    {
        try {
            $receita = new Receita([
                'user' => Auth::user()->id,
                'categoria' => $request->categoria,
                'nome' => $request->nome,
                'origem' => $request->origem,
                'tempo' => $request->tempo,
                'ingredientes' => $request->ingredientes,
                'avaliacao_geral' => $request->avaliacao_geral,
                'preparo' => $request->preparo,
                'foto' => $request->foto
            ]);
            $receita->save();

            return redirect('/', 201)->with('success', 'Criado com sucesso');
        } catch (Error $th) {
            return $th->getMessage();
        }
    }

    public function minhasReceitas(Request $request)
    {
        $receitas = Receita::where('user', $request->user)->get();
        return view('receita.minhas-receitas', compact('receitas'));
        return response('ok', 200);
    }
}
