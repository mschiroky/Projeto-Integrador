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
  <?php include_once("includes/navbar.php") ?>
  <!-- Nav Bar !-->
  <div class="container h-100 pt-4">
    <div class="row h-100 justify-content-center align-items-center">
      <form action="actions.php" method="POST" class="form-signin col-sm-12 col-md-12 col-lg-6 text-center">
        <input type="hidden" name="acao" value="login">
        <h1 class="h3 mb-3 font-weight-normal">Faça o login</h1>
        <input type="email" name="email" id="inputEmail" class="form-control mb-2" placeholder="Email address" required autofocus>
        <input type="password" name="senha" id="inputPassword" class="form-control mb-2" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
      </form>
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