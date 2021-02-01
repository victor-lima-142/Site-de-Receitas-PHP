<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Receita;
use Error;

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
            $tempo = $request->tempo . " minutos";
            $receita = new Receita([
                'nome' => $request->nome,
                'origem' => $request->origem,
                'tempo' => $tempo,
                'foto' => $request->foto,
                'ingredientes' => $request->ingredientes,
                'preparo' => $request->preparo,
                // 'user' => 1
            ]);
            $receita->save();

            return redirect('/');
        } catch (Error $th) {
            return $th->getMessage();
        }
    }
}