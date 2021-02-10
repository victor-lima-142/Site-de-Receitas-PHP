<form>
    <div class="d-flex">
        <div class="input-group mb-3 text-center">
            <span class="input-group-text">Categoria</span>
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
        <div class="w-25"></div>
        <div class="input-group mb-3 w-50">
            <span class="input-group-text">Minutos</span>
            <input type="number" max="999" id="tempo" name="tempo" min="2" step="any" class="form-control">
        </div>
        <div class="input-group mb-3" hidden>
            <span class="input-group-text">AVALIACAO</span>
            <input type="text" class="form-control" value="0" name="avaliacao" id="avaliacao"
                placeholder="Ex: bolo de chocolate">
        </div>
    </div>
    <button type="button" id="enviaPOST" class="btn btn-success">Gerar receita</button>
</form>
</div>

<hr class="dropdown-divider">



{{-- INGREDIENTES --}}
<div class="ps-5 pe-5">
    <div class="d-flex justify-content-between mt-3 text-primary align-items-center">
        <h6 class="fw-light ">Adicionar Ingrediente</h6>
        <button class="btn text-primary" id="adicionar-botao">
            <i class="material-icons" type="button">add_circle_outline</i>
        </button>
    </div>
    <div class="mb-3">
        <form method="POST" id="formulario-ingrediente" class="mt-3 w-100">
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
