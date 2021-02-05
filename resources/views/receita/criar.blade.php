@extends('layouts.layout')
@section('titulo')
    Criar Receita
@endsection

@section('conteudo')
    <div class="container-fluid p-3 pb-5 text-center" style="background-color: rgb(240, 240, 240)">
        <h4 class="fw-lighter">Adicionar uma receita</h4>
        <div class="card w-75 pt-4 p-2 mx-auto">
            <form enctype="multipart/form-data">

                <div class="d-flex justify-content-between">
                    <div class="input-group mb-3 text-center">
                        <span class="input-group-text">Categorias</span>
                        <select class="form-select" id="categoria" name="categoria">
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nome_menu }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-25"></div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Origem</span>
                        <input type="text" class="form-control" name="origem" id="origem" placeholder="Pode ser nulo">
                    </div>
                </div>



                {{-- NOME DO PRATO E ORIGEM --}}
                <div class="d-flex justify-content-between align-items-center">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nome</span>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Ex: bolo de chocolate">
                    </div>
                    <div class="input-group mb-3" hidden>
                        <span class="input-group-text">AVALIACAO</span>
                        <input type="text" class="form-control" value="0" name="avaliacao" id="avaliacao"
                            placeholder="Ex: bolo de chocolate">
                    </div>
                </div>

                {{-- TEMPO DE PREPARO E FOTO DO PRATO --}}
                <div class="d-flex justify-content-between align-items-center">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Minutos</span>
                        <input type="number" max="999" id="tempo" name="tempo" min="2" step="any" class="form-control">
                    </div>
                    <div class="w-25"></div>
                    <div class="input-group mb-3">
                        <input class="form-control" name="foto" id="foto" type="file" id="formFile">
                    </div>
                </div>

                {{-- INGREDIENTES E MODO DE PREPARO --}}
                <div class="d-flex justify-content-between mb-3">
                    <label for="ingredientes" class="input-group-text">Ingredientes</label>
                    <textarea class="form-control" id="ingredientes" name="ingredientes" rows="3"></textarea>
                </div>
                <div class="input-group mb-3">
                    <label for="preparo" class="input-group-text">Preparo</label>
                    <textarea class="form-control" id="preparo" name="preparo" rows="4"></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-success" id="enviaPOST">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('ajax')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#enviaPOST").click(function(e) {

            e.preventDefault();

            var origem = $("input[name=origem]").val();
            var nome = $("input[name=nome]").val();
            var tempo = $("input[name=tempo]").val();
            var foto = $("input[name=foto]").val();
            var avaliacao = $("input[name=avaliacao]").val();

            $.ajax({
                type: 'POST',
                url: "{{ route('receita.post') }}",
                data: {
                    origem: origem,
                    nome: nome,
                    tempo: tempo,
                    foto: foto,
                    categoria: document.getElementById("categoria").value,
                    ingredientes: document.getElementById("ingredientes").value,
                    preparo: document.getElementById("preparo").value,
                    avaliacao_geral: document.getElementById('avaliacao').value
                },
                success: function(data) {
                    alert(data.success);
                }
            });
        });

    </script>
@endsection
