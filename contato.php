<?php

session_start();

if (!isset($_SESSION['logado'])) {
  header("Location: login.php");
}
require_once("conexao.php");
$query = $conn->prepare("SELECT * FROM login WHERE id_usuario = ?");
$parametros = array($_GET['id_usuario']);
$query->execute($parametros);
$query1 = $conn->prepare("SELECT * FROM cadastro WHERE nome = ?");
$parametros = array($_GET['nome']);
$query1->execute($parametros);
$resposta = $query->fetchAll(PDO::FETCH_OBJ);
$resposta = $query1->fetchAll(PDO::FETCH_OBJ);

$id_usuario = $resposta[0]->id_usuario;
$nome = $resposta[0]->nome;
$email = $resposta[0]->email;

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
  <?php include_once("includes/navcontato.php") ?>
  <!-- Nav Bar !-->


  <div class="container">
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Nome Completo</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu Nome e Sobrenome">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu Email">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">Selecione um Campo Abaixo:</label>
        <select multiple class="form-control" id="exampleFormControlSelect2">
          <option>Duvida 1</option>
          <option>Duvida 2</option>
          <option>Duvida 3</option>
          <option>Duvida 4</option>
          <option>Duvida 5</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Digite seu Comentario</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button class="btn btn-info my-2 my-sm-0" type="button" id="login">
        Enviar
      </button>
    </form>
  </div>

  <!-- Footer -->
  <?php include_once("includes/footer.php") ?>
  <!-- Footer -->
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script type="text/javascript">
    document.getElementById("login").onclick = function() {
      location.href = "login.php";
    };
  </script>

</body>

</html>