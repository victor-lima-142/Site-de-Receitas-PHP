<?php

use App\Http\Controllers\Controller;
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
        $categorias = Categoria::all();
        return view('receita.criar', compact('categorias'));
    });

    Route::post('/criar-receita', [ReceitaController::class, "store"])->name('receita.post');
});
Auth::routes();

Route::get('/minhas-receitas/{user}', [ReceitaController::class, 'minhasReceitas']);
