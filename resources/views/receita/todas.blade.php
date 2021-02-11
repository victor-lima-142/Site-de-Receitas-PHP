@extends('layouts.layout')

@section('titulo')
    Lista de receitas
@endsection

@section('conteudo')
    <div class="container ps-2 mt-2">
        <div class="row">
            <div class="col-5">
                <input id="myInput" type="text" class="form-control" placeholder="Pesquisar pelo nome...">
            </div>
        </div>

    </div>

    <div class="container p-2">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th class="text-start" scope="col">Nome</th>
                    <th scope="col">Origem</th>
                    <th scope="col">Minutos</th>
                    <th scope="col">Avaliação</th>
                    <th scope="col">Categoria</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach ($receitas as $receita)

                    <tr class="text-center">
                        <th class="text-start" scope="row">
                            <a href="/receita/{{ $receita->id }}">
                                <span class="fw-lighter text-dark">{{ $receita->nome }}</span>
                            </a>
                        </th>
                        <td>
                            <a href="/receita/{{ $receita->id }}" class="text-dark">{{ $receita->origem }}</a>
                        </td>
                        <td><a href="/receita/{{ $receita->id }}" class="text-dark">{{ $receita->tempo }}</a></td>
                        <td><a href="/receita/{{ $receita->id }}" class="text-dark">{{ $receita->avaliacao_geral }}</a>
                        </td>
                        <td><a href="/receita/{{ $receita->id }}" class="text-dark">{{ $receita->categoria }}</a></td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('ajax')
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

    </script>
@endsection
