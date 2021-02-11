<?php

namespace App\Http\Controllers;

use App\Models\Passo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassoController extends Controller
{

    public function store(Request $request)
    {
        $ingrediente = new Passo($request->all());
        $ingrediente->receita = $request->receita;
        $ingrediente->save();
        return response()->json($ingrediente, 201);
    }
}
