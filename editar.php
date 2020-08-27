<?php

session_start();

if (!isset($_SESSION['logado'])) {
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Projeto PI</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>

  <!-- Nav Bar !-->
  <?php include_once("includes/navlogado.php") ?>
  <!-- Nav Bar !-->

  <div class="container">
    <div class="row pt-4">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h2>Editar Dados</h2>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12">
        <form action="actions.php" method="POST" class="was-validated">
          <input type="hidden" name="acao" value="editar">
          <input type="hidden" name="id_usuario" value="<?php $id_usuario; ?>">
          <div class="form-group text-left">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Email do usuário" name="email" value="<?php $email; ?>" required>
          </div>
          <div class="form-group text-left">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" value="<?php $senha; ?>" placeholder="***********" name="senha">
          </div>
          <button type="submit" class="btn btn-primary">Salvar alterações</button>
          <a class="btn btn-danger" href="logado.php">Voltar</a>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include_once("includes/footer.php") ?>
  <!-- Footer -->



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>