$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var idReceita = {};

    var contadorPreparo = {};
    contadorPreparo.contador = 0;

    $("#criar-botao-excluir-receita").hide();
    $("#formulario-ingrediente").hide();
    $("#dados-da-receita").hide();
    $("#dados-dos-ingredientes").hide();
    $("#excluir-botao").hide();
    $("#excluir-botao-preparo").hide();
    $("#formulario-preparo").hide();
    $("#segundo-passo-da-receita").hide();

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
                $("#dados-da-receita").show();
                $("#criar-botao-excluir-receita").show();
                $("#ingrediente-label-form").show();


                $('#criar-botao-excluir-receita').append(
                    "<a href='/excluir-receita/" + idReceita.id +
                    "'><btn class='btn btn-outline-danger' id='excluir-receita'>Excluir</btn></a>"
                )

                document.getElementById('nome-receita').innerHTML = 'Nome: ' + nome + ' - Código: ' + idReceita.id;
                document.getElementById('origem-receita').innerHTML = 'Origem: ' + origem;
                document.getElementById('tempo-receita').innerHTML = 'Tempo: ' + tempo + ' minutos';


                console.log(result);

                $("#segundo-passo-da-receita").slideDown();
            },
            error: function (result) {
                console.log(result)
            }
        });
    });



    $("#adicionar-botao").click(function (e) {
        $("#formulario-ingrediente").slideDown();
        $("#excluir-botao").show();
        $("#adicionar-botao").hide();
    });

    $("#excluir-botao").click(function (e) {
        $("#formulario-ingrediente").slideUp();
        $("#excluir-botao").hide();
        $("#adicionar-botao").show();
    });

    $("#excluir-botao-preparo").click(function (e) {
        $("#formulario-preparo").slideUp();
        $("#excluir-botao-preparo").hide();
        $("#adicionar-preparo-botao").show();
    });

    $("#adicionar-preparo-botao").click(function (e) {
        $("#formulario-preparo").slideDown();
        $("#excluir-botao-preparo").show();
        $("#adicionar-preparo-botao").hide();
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
                $("#formulario-ingrediente").slideUp();
                $("#dados-dos-ingredientes").show();
                $("#excluir-botao").hide();
                console.log(response);
                document.getElementsById('quantidade').value = '';
                document.getElementsById('ingrediente').value = '';
                $("#dados-dos-ingredientes").show();

                var frase = quantidade + " de " + ingrediente;
                $('ul#listagem-ing').append("<li class='list-group-item'>" + frase + "</li>")
            },
            error: function (response) {
                alert(idReceita.id);
            }
        });
    });







    $("#postarPasso").click(function (e) {


        e.preventDefault();

        var descricao = document.getElementById('passo-textarea').value;


        $.ajax({
            type: 'POST',
            url: "http://localhost:8000/adicionar-passo",
            data: {
                descricao: descricao,
                receita: idReceita.id
            },
            success: function (response) {
                $("#excluir-botao-preparo").hide();
                $("#formulario-preparo").hide();
                $("#adicionar-preparo-botao").show();
                $('#dados-dos-passos').show();
                $("#adicionar-botao").show();

                contadorPreparo.contador = contadorPreparo.contador + 1;

                $("#formulario-preparo").slideUp();
                console.log(response);
                document.getElementById('passo-textarea').value = '';

                $('ul#listagem-passos').append("<li class='list-group-item'>" + contadorPreparo.contador + "º " + descricao + "</li>")
            },
            error: function (response) {
                alert(idReceita.id);
            }
        });
    });
});