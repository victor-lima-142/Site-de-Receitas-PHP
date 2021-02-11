@extends('layouts.layout')

@section('titulo')
    Criar receita
@endsection

@section('conteudo')
    <div class="container mt-3 mb-3">
        <div class="modal-content">
            @include('forms.receita')
            <hr class="dropdown-divider mt-4">
            @include('forms.ingrediente')
        </div>
    </div>


@endsection

@section('ajax')
    <script type="text/javascript" src="{{ asset('/js/criarReceita.js') }}">
    </script>
@endsection
