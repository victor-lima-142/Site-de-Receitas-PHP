<div class="ps-5 pe-5" id="ingredientes">
    <div class="d-flex justify-content-between mt-3 text-primary align-items-center">
        <h6 class="fw-light ">Adicionar Ingrediente</h6>
        <button class="btn text-primary" id="adicionar-botao">
            <i class="material-icons" type="button">add_circle_outline</i>
        </button>
    </div>
    <div class="mb-3" id="formulario-ingrediente">
        <form method="POST" class="mt-3 w-100">
            <div class="d-flex w-100">
                <div class="d-block w-100">
                    <label for="">Nome do ingrediente</label>
                    <input type="text" id="ingrediente" name="ingrediente" placeholder="Chá" class="form-control w-100">
                </div>
                <div class="w-25"></div>
                <div class="d-block w-100">
                    <label for="">Quantidade</label>
                    <input type="text" placeholder="Uma colher" id="quantidade" name="quantidade"
                        class="form-control w-100">
                </div>
            </div>
            <div class="text-center mt-2">
                <button class="btn btn-outline-success" id="postarIngrediente">Adicionar
                    Ingrediente</button>
            </div>
        </form>
    </div>
    <div class="w-75 p-3" id="dados-dos-ingredientes">
        <ul class="list-group" id="listagem-ing">
        </ul>
    </div>
</div>
