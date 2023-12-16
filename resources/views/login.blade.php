
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<div style="display: flex; justify-content: center;margin-top: 12%;">
    <form action="cadastroUsuario.php">
        <div class="form-group">
            <label for="exampleInputEmail1">CPF</label>
            <input class="form-control" name="cpf" aria-describedby="emailHelp" placeholder="CPF" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" name="password" placeholder="Senha" required>
        </div>
        <div class="form-group form-check">
        </div>
        <button style="width: 100%;" id="login" type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<span style=" padding-top: 3px;font-size: 12px; display: flex;
  justify-content: center;
  ">Ainda não tem um cadastro? <a href="cadastroUsuario.php">Cadastre-se</a></span>
</div>
<?php
@include("rodape");
?>