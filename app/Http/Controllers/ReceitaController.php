<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Receita;

class ReceitaController extends Controller
{
    public function index()
    {
        $listagem = Receita::all();
        return view('index', compact('listagem'));
    }
}