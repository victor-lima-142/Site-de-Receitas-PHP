$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var idReceita = {};

    $("#criar-botao-excluir-receita").hide();
    $("#formulario-ingrediente").hide();
    $("#dados").hide();
    $("#dados-dos-ingredientes").hide();

    $("#enviaPOST").click(function (e) {

        e.preventDefault();

        var origem = $("input[name=origem]").val();
        var nome = $("input[name=nome]").val();
        var tempo = $("input[name=tempo]").val();

        $.ajax({
            type: 'POST',
            url: "http://localhost:8000/criar-receita",
            data: {
                origem: origem,
                nome: nome,
                tempo: tempo,
                categoria: document.getElementById("categoria").value,
                avaliacao_geral: document.getElementById('avaliacao').value
            },
            dataType: 'json',
            success: function (result) {

                idReceita.id = result.id;

                $("#formulario-criacao").hide();
                $("#dados").show();
                $('#criar-botao-excluir-receita').append(
                    "<a href='/excluir-receita/" + idReceita +
                    "'><btn class='btn btn-outline-danger' id='excluir-receita'>Excluir</btn></a>"
                )
                $("#criar-botao-excluir-receita").show();

                document.getElementById('nome-receita').innerHTML = 'Nome: ' + nome + ' - Código: ' + idReceita.id;
                document.getElementById('origem-receita').innerHTML = 'Origem: ' + origem;
                document.getElementById('tempo-receita').innerHTML = 'Tempo: ' + tempo + ' minutos';

                console.log(result);
            },
            error: function (result) {
                console.log(result)
            }
        });
    });



    $("#adicionar-botao").click(function (e) {
        $("#formulario-ingrediente").show();
    });

    $("#postarIngrediente").click(function (e) {
        e.preventDefault();

        var ingrediente = $("input[name=ingrediente]").val();
        var quantidade = $("input[name=quantidade]").val();

        $.ajax({
            type: 'POST',
            url: "http://localhost:8000/adicionar-ingrediente",
            data: {
                quantidade: quantidade,
                nome: ingrediente,
                receita: idReceita.id
            },
            success: function (response) {
                document.getElementById('formulario-ingrediente').reset();
                console.log(response);
                $("#formulario-ingrediente").hide();
                $("#dados-dos-ingredientes").show();

                $('ul#lista-ingredientes').append("<li class='list-group-item'>" +
                    ingrediente + "</li>")
            },
            error: function (response) {
                alert(idReceita.id);
            }
        });
    })
});