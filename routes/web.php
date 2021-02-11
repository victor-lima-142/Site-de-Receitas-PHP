<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\PassoController;
use App\Http\Controllers\ReceitaController;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, 'index']);



Route::middleware('auth')->group(function () {
    Route::get('/criar-receita', function () {
        return view('receita.create-receitas');
    })->name('receita.view-criar');

    Route::post('/criar-receita', [ReceitaController::class, "store"])->name('receita.post');

    Route::get('/excluir-receita/{id}', [ReceitaController::class, "delete"]);

    Route::get('/receita/{receita}', [ReceitaController::class, 'info']);

    Route::post('/adicionar-ingrediente', [IngredienteController::class, 'store'])->name('ingredientes.adicionar');
    
    Route::post('/adicionar-passo', [PassoController::class, 'store']);

    Route::get('/minhas-receitas/{user}', [ReceitaController::class, 'minhasReceitas']);
});

Route::get('lista-receitas', [ReceitaController::class, 'index']);
Route::get('/categoria/{categoria}', [ReceitaController::class, 'filtro'])->name('receita.filtrada');

Auth::routes();
