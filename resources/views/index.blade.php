@extends('layouts.layout')

@section('titulo')
    Inicio
@endsection

@section('conteudo')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images3.alphacoders.com/807/thumb-1920-807704.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://s1.1zoom.me/b5456/364/Fast_food_French_fries_Beer_Hamburger_Highball_524931_1920x1080.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images6.alphacoders.com/100/1002209.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <div class="container mt-2 p-2">
        <div class="row">
            @foreach ($receitas as $receita)
                <div class="col-4">
                    <div class="card shadow border-0">
                        <div class="card-body text-center">
                            <img src="https://www.flaticon.com/svg/static/icons/svg/2424/2424986.svg" class="card-imagem"
                                alt="...">
                            <h5 class="card-title text-center">{{ $receita->nome }}</h5>
                            <div class="text-center">
                                <a href="#" class="card-link">{{ $receita->tempo }}</a>
                                <a href="#" class="card-link">{{ $receita->origem }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
