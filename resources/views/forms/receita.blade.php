<div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel">Nova Receita</h5>
    <div class="" id="criar-botao-excluir-receita">
        <form action method="post"></form>
    </div>
</div>
<div class="w-75 p-3" id="dados-da-receita">
    <ul class="list-group">
        <li class="list-group-item" id="nome-receita"></li>
        <li class="list-group-item" id="origem-receita"></li>
        <li class="list-group-item" id="tempo-receita"></li>
    </ul>
</div>
<div class="modal-body" id="formulario-criacao">
    <form>
        <div class="d-flex">
            <div class="input-group mb-3 text-center">
                <span class="input-group-text">Categoria</span>
                <select class="form-select" id="categoria" name="categoria" required>
                    <option value="Salgado">Salgado</option>
                    <option value="Doce">Doce</option>
                    <option value="Pratos Finos">Pratos Finos</option>
                    <option value="Sobremesas">Sobremesas</option>
                </select>
            </div>

            <div class="w-25"></div>

            <div class="input-group mb-3">
                <span class="input-group-text">Origem</span>
                <input type="text" class="form-control" name="origem" id="origem" placeholder="Ex: Brasil" required>
            </div>
        </div>
        {{-- NOME DO PRATO E ORIGEM --}}
        <div class="d-flex justify-content-between align-items-center">
            <div class="input-group mb-3">
                <span class="input-group-text">Nome</span>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Ex: bolo de chocolate"
                    required>
            </div>
            <div class="w-25"></div>
            <div class="input-group mb-3 w-50">
                <span class="input-group-text">Minutos</span>
                <input type="number" max="999" id="tempo" name="tempo" min="2" step="any" class="form-control" required>
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
