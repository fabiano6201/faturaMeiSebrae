
@include("cabecalho");

<BR>
<h2 class="text-primary" style="text-align: center;">CADASTRO CLASSIFICAÇÃO DE LANÇAMENTOS</h2>
<br>
<div style="width: 30%; justify-content: center;margin: auto;">
    <form action="cadastroUsuario.php">
        <div class="form-group">
            <label for="classificacao">Nome classificação</label>
            <input class="form-control" name="classificacao" aria-describedby="emailHelp" placeholder="Ex: combustivel" required>
        </div>

        <label for="descricao">Descrição</label>
        <textarea class="form-control" name="descricao" placeholder="Descrição" required></textarea>

        <div class="form-group form-check">
        </div>
        <div class="form-group">
            <button id="voltar" type="button" class="btn btn-primary">Voltar</button>
            <button type="submit" id="salvar" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>


@include("rodape");
