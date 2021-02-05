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
        // Define o valor default para a variável que contém o nome da imagem 
        $nameFile = null;

        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $foto = $request->foto->getClientOriginalName();

            dd(time());
            $name = uniqid(date('HisYmd'));
            $extension = $request->foto->extension();
            $nameFile = "{}.{$name}.{$extension}";
            dd($nameFile);
            $upload = $request->foto->storeAs('database/foto-de-receitas', $nameFile);
            if (!$upload) {
                return 'falha ao fazer upload';
            } else {
                try {
                    $tempo = $request->tempo . " minutos";
                    $receita = new Receita([
                        'nome' => $request->nome,
                        'origem' => $request->origem,
                        'tempo' => $tempo,
                        'foto' => $request->foto,
                        'ingredientes' => $request->ingredientes,
                        'preparo' => $request->preparo,
                        'user' => Auth::user()->id
                    ]);
                    $receita->save();

                    return $receita;
                } catch (Error $th) {
                    return $th->getMessage();
                }
            }
        }
    }

    public function minhasReceitas(Request $request)
    {
        $receitas = Receita::where('user', $request->user)->get();
        return view('receita.minhas-receitas', compact('receitas'));
        return response('ok', 200);
    }
}