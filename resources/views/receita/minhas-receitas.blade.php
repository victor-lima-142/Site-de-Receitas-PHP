@extends('layouts.layout')
@section('titulo')
    Minhas Receitas
@endsection
@section('conteudo')
    <h1 class="text-center fw-lighter">Minhas Receitas</h1>
    <div class="container mt-2 p-2">
        <div class="row">
            @foreach ($receitas as $receita)
                <div class="col-4">
                    <div class="card shadow border-0">
                        <div class="card-body text-center">
                            <img src="https://www.flaticon.com/svg/static/icons/svg/2424/2424986.svg" class="card-imagem"
                                alt="...">
                            <h5 class="card-title text-center">{{ $receita->nome }}</h5>
                            <span class="text-dark card-link">{{ $receita->tempo }}</span>
                            <span class="text-dark card-link">{{ $receita->origem }}</span>
                            <div class="text-center">
                                <a href="http://localhost:8000/receita/{{ $receita->id }}"
                                    class="card-link text-secondary">Visualizar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
