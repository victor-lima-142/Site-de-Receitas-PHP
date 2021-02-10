@php
$categorias = App\Models\Categoria::all();
@endphp

@extends('layouts.layout')

@section('titulo')
    Lista de receitas
@endsection

@section('conteudo')
    <div class="container ps-2 mt-2">
        <div class="d-flex">
            <form method="get">
                <select class="form-select" id="categoria" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome_menu }}
                        </option>
                    @endforeach
                </select>
            </form>
            <button type="button" class="ms-2 btn btn-primary" id="btn-filtrar"><i
                    class="material-icons">filter_alt</i></button>
        </div>
    </div>

    <div class="container p-2">
        <ul class="list-group rounded-top rounded-0">
            <li class="list-group-item">
                <div class="row">
                    <div class="col-3">
                        Nome
                    </div>
                    <div class="col-4 text-center">
                        <div class="row">
                            <div class="col-4">Origem</div>
                            <div class="col-4">Tempo</div>
                            <div class="col-4">Avaliação</div>
                        </div>
                    </div>
                    <div class="col-5 text-center">
                        Preparo
                    </div>
                </div>
            </li>
        </ul>
        <ul class="list-group rounded-0">
            @foreach ($receitas as $receita)
                <li class="list-group-item p-3">
                    <div class="row fw-lighter">
                        <div class="col-3 text-start">
                            <a href="/receita/{{ $receita->id }}">
                                <h6 class="fw-lighter">{{ $receita->nome }}</h6>
                            </a>
                        </div>
                        <div class="col-4 text-center ">
                            <div class="row">
                                <div class="col-4">{{ $receita->origem }}</div>
                                <div class="col-4">{{ $receita->tempo }} min</div>
                                <div class="col-4">{{ $receita->avaliacao_geral }}</div>
                            </div>
                        </div>
                        <div class="col-5 text-center">
                            {{ $receita->preparo }}
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

@section('ajax')
    <script>

    </script>
@endsection
