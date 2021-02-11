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
        $receitas = Receita::all();
        return view('receita.todas', compact('receitas'));
    }

    public function store(Request $request)
    {
        try {
            $receita = new Receita($request->except('preparo'));
            $receita->user = Auth::user()->id;
            $receita->save();

            return response()->json($receita, 201);
        } catch (Error $th) {
            $mensagem = $th->getMessage();
            return response()->json($mensagem, $th->http_response_code);
        }
    }

    public function minhasReceitas(Request $request)
    {
        $receitas = Receita::where('user', $request->user)->get();
        return view('receita.minhas-receitas', compact('receitas'));
        return response('ok', 200);
    }

    public function filtro(Request $request)
    {
        $receitas = DB::table('receitas')->where('categoria', "=", $request->categoria)->get();
        return view('receita.todas', compact('receitas'));
    }

    public function info(Request $request)
    {
        $ingredientes = DB::table('ingredientes')->where('receita', '=', $request->receita)->get();
        $dados = DB::table('receitas')->where('id', '=', $request->receita)->get();
        return view('receita.info', compact('dados', 'ingredientes'));
    }

    public function delete(Request $request)
    {
        $receita = DB::table('receitas')
            ->where('id', '=', $request->id)->delete();
        return back();
    }
}
