@extends('layouts.layout')
@section('titulo')
    Criar Receita
@endsection

@section('conteudo')
    <div class="container-fluid p-3 text-center">
        <h4 class="fw-lighter">Adicionar uma receita</h4>
        <div class="card w-75 pt-4 p-2 mx-auto">
            <form method="post">
                {{-- NOME DO PRATO E ORIGEM --}}
                <div class="d-flex justify-content-between align-items-center">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" placeholder="Ex: bolo de chocolate" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="w-25"></div>
                    <div class="input-group mb-3 w-75">
                        <span class="input-group-text" id="basic-addon1">Origem</span>
                        <input type="text" class="form-control" placeholder="Ex: Pode ser nulo" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                </div>

                {{-- TEMPO DE PREPARO E FOTO DO PRATO --}}
                <div class="d-flex justify-content-between align-items-center">
                    <div class="input-group mb-3 w-50">
                        <span class="input-group-text" id="basic-addon1">Tempo (min)</span>
                        <input type="number" max="999" min="2" step="any" class="form-control" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="w-25"></div>
                    <div class="input-group mb-3">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>

                {{-- INGREDIENTES E MODO DE PREPARO --}}
                <div class="d-flex justify-content-between mb-3">
                    <label for="exampleFormControlTextarea1" class="input-group-text">Ingredientes</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="input-group mb-3">
                    <label for="exampleFormControlTextarea1" class="input-group-text">Preparo</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-success">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
