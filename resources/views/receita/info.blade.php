@extends('layouts.layout')

@section('titulo')
    @foreach ($dados as $dado)
        {{ $dado->nome }} - info
    @endforeach
@endsection

@section('conteudo')
    <div class="container p-4">
        <div class="row">
            <div class="col-4 text-center">
                <div class="card p-3 shadow">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/2424/2424986.svg" class="card-img-top"
                        alt="...">
                </div>
            </div>
            <div class="col-8 border rounded shadow text-center">
                <h3 class="fw-lighter">{{ $dado->nome }}</h3>
                <div
                    class="d-flex text-center justify-content-between aling-items-center text-secondary ms-5 me-5 ps-5 pe-5">
                    <span id="tempo" class="align-items-center d-flex">
                        <i class="material-icons">alarm</i>&nbsp;{{ $dado->tempo }} minutos
                    </span>
                    <span id="origem" class="align-items-center d-flex">
                        <i class="material-icons">room</i>&nbsp;{{ $dado->origem }}
                    </span>
                    <span id="avaliacao" class="align-items-center d-flex">
                        <i class="material-icons">star_rate</i>&nbsp;{{ $dado->avaliacao_geral }}
                    </span>
                </div>
                <hr class="dropdown-divider">
                <div id="ingredientes">
                    <p>
                        {{ $dado->ingredientes }}
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection
