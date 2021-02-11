<div class="ps-5 pe-5" id="ingredientes">
    <div class="d-flex justify-content-between mt-4 mb-4 text-primary align-items-center">
        <h6 class="fw-light ">Inserir passo no preparo</h6>
        <button class="btn text-primary" id="adicionar-preparo-botao">
            <i class="material-icons" type="button">add_circle_outline</i>
        </button>
        <button class="btn text-primary" id="excluir-botao-preparo">
            <i class="material-icons" type="button">remove_circle_outline</i>
        </button>
    </div>
    <div class="mb-3" id="formulario-preparo">
        <form method="POST" class="mt-3 w-100">
            <textarea class="form-control fs-6" placeholder="Insira o modo de preparo" rows="3"
                id="passo-textarea"></textarea>
        </form>

        <div class="text-center mt-2 mb-4">
            <button class="btn btn-outline-success" id="postarPasso">Adicionar
                Ingrediente</button>
        </div>
    </div>
    <div class="w-75 p-3" id="dados-dos-passos">
        <ul class="list-group" id="listagem-passos">
        </ul>
    </div>

</div>
