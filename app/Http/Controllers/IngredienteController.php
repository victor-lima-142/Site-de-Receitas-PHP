<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IngredienteController extends Controller
{
    public function store(Request $request)
    {
        $ingrediente = new Ingrediente($request->all());
        $ingrediente->user = Auth::user()->id;
        $ingrediente->receita = $request->receita;
        $ingrediente->save();
        return response()->json($ingrediente, 201);
    }
}
