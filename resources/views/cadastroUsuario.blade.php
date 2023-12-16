<?php
include_once("cabecalho.php");
?>
<div style=" display: flex;justify-content: center;margin-top:2%;">

  <form action="../controle/cadastroUsuario_controle.php" method="GET">
  <h2 class="text-primary" style="text-align: center;">CADASTRO USUÁRIO</h2>
  <br>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" name="cpf" placeholder="CPF" required>
      </div>
      <div class="form-group col-md-8">
        <label for="apelido">Apelido</label>
        <input type="text" class="form-control" name="apelido" placeholder="Apelido" required>
      </div>
    </div>

    <div class="form-group ">
      <label for="nomeCompleto">Nome completo</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome completo" required>
    </div>
    <div class="form-group ">
      <label for="nomeCompleto">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>

    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" name="telefone" placeholder="(xx)x xxxx-xxxx" required>
      </div>
      <div class="form-group col-md-8">
        <label for="nomeDaMae">Nome da mãe</label>
        <input type="text" class="form-control" name="nomeDaMae" placeholder="Nome da Mãe" required>
      </div>
    </div>

    <div class="form-group">
      <label for="dataNascimento">Data de nascimento</label>
      <input type="date" class="form-control" name="dataNascimento" placeholder="00/00/0000" required>
    </div>
    <div class="form-group">
      <button id="voltar" type="button" class="btn btn-primary">Voltar</button>
      <button type="submit" id="salvar" class="btn btn-primary">Salvar</button>
    </div>
</div>
</form>
</div>

<?php
include_once("../visao/cadastroUsuario.php");
?>