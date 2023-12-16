<?php
include_once("cabecalho.php");
?>
<br>
<h2 class="text-primary" style="text-align: center;">CADASTRO EMPRESA</h2>
<div style=" display: flex;justify-content: center;margin-top:5%;">
  <form action="../controle/cadastroEmpresa_controle.php" method="GET">
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="cnpj">CNPJ</label>
        <input type="text" class="form-control" name="cnpj" placeholder="CNPJ" required>
      </div>
    </div>

    <div class="form-group">
      <label for="razaoSocial">Razão Social</label>
      <input type="text" class="form-control" name="razaoSocial" placeholder="Razão Social" required>
    </div>

    <div class="form-group">
      <label for="endereco">Endereço</label>
      <input type="text" class="form-control" name="endereco" placeholder="Rua dos Bobos, nº 0" required>
    </div>

    <div class="form-row">
      <div class="form-group col-md-5">
        <label for="inputCity">Cidade</label>
        <input type="text" class="form-control" name="cidade" required>
      </div>

      <div class="form-group col-md-4">
        <label for="inputEstado">Estado</label>
        <select name="uf" class="form-control">
          <option selected>Escolher...</option>
          <option>Acre (AC)</option>
          <option>Alagoas (AL)</option>
          <option>Amapá (AP)</option>
          <option>Amazonas (AM)</option>
          <option>Bahia (BA)</option>
          <option>Ceará (CE)</option>
          <option>Distrito Federal (DF)</option>
          <option>Espírito Santo (ES)</option>
          <option>Goiás (GO)</option>
          <option>Maranhão (MA)</option>
          <option>Mato Grosso (MT)</option>
          <option>Mato Grosso do Sul (MS)</option>
          <option>Minas Gerais (MG)</option>
          <option>Pará (PA)</option>
          <option>Paraíba (PB)</option>
          <option>Paraná (PR)</option>
          <option>Pernambuco (PE)</option>
          <option>Piauí (PI)</option>
          <option>Rio de Janeiro (RJ)</option>
          <option>Rio Grande do Norte (RN)</option>
          <option>Rio Grande do Sul (RS)</option>
          <option>Rondônia (RO)</option>
          <option>Roraima (RR)</option>
          <option>Santa Catarina (SC)</option>
          <option>São Paulo (SP)</option>
          <option>Sergipe (SE)</option>
          <option>Tocantins (TO)</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="inputCEP">CEP</label>
        <input type="text" class="form-control" name="cep" required>
      </div>
    </div>
    <a href="/faturaMEI/index.php">
      <button id="voltar" type="button" class="btn btn-primary">Voltar</button>
    </a>

    <button type="submit" id="salvar" class="btn btn-primary">Salvar</button>
  </form>
</div>

<?php
include_once("rodape.php");
?>
