@extends('layouts.layout')

@section('titulo')
    Criar receita
@endsection

@section('conteudo')
    <div class="container mt-3 mb-5">
        <div class="modal-content">
            @include('forms.receita')

            <div id="segundo-passo-da-receita">
                <hr class="dropdown-divider mt-4">
                @include('forms.ingrediente')
                <hr class="dropdown-divider mt-4">
                @include('forms.preparo')
            </div>


        </div>
    </div>


@endsection

@section('ajax')
    <script type="text/javascript" src="{{ asset('/js/criarReceita.js') }}">
    </script>
@endsection
