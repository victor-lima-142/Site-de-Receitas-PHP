@extends('layouts.layout')

@section('titulo')
    Criar receita
@endsection

@section('conteudo')
    <div class="mt-3 mb-3">
        <div class="container">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Nova Receita</h5>
                    <div class="" id="criar-botao-excluir-receita">
                        <form action method="post"></form>
                    </div>
                </div>
                <div class="w-75 p-3" id="dados">
                    <ul class="list-group">
                        <li class="list-group-item" id="nome-receita"></li>
                        <li class="list-group-item" id="origem-receita"></li>
                        <li class="list-group-item" id="tempo-receita"></li>
                        <li class="list-group-item" id="categoria-receita"></li>
                    </ul>
                </div>
                <div class="w-75 p-3" id="dados-dos-ingredientes">
                    <h5 class="fw-lighter">Ingredientes</h5>
                    <ul class="list-group">
                    </ul>
                </div>
                <div class="modal-body" id="formulario-criacao">
                    @include('forms.receita')
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection

@section('ajax')
    <script type="text/javascript" src="{{ asset('/js/criarReceita.js') }}">
    </script>
@endsection
