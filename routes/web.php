<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ReceitaController;
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

Route::get('/criar-receita', function () {
    return view('receita.criar');
});
Route::post('/criar-receita', [ReceitaController::class, "store"]);
Auth::routes();

Route::get('/minhas-receitas/{user}', [ReceitaController::class, 'minhasReceitas']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');