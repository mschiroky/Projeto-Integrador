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

  <!-- Carrossel -->
  <div class="container">
    <div class="row mt-4 ml-1 bg-light">
      <div class="col-sm-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="image/android.png" alt="First slide" />
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="image/ios1.png" alt="Second slide" />
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="image/windows.png" alt="Third slide" />
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Carrossel -->

  <div class="container">
    <div class="row mt-4">
      <div class="col-sm-12 col-lg-6 mb-2">
        <img class="d-block w-100 bg-light" src="image/android.png" alt="" />
      </div>
      <div class="col-sm-12 col-lg-6 bg-light mb-2">
        <span class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Perspiciatis esse veniam inventore consectetur? Debitis
          exercitationem ipsa dolorum ea earum quas.Lorem ipsum dolor sit,
          amet consectetur adipisicing elit. Perspiciatis esse veniam
          inventore consectetur? Debitis exercitationem ipsa dolorum ea earum
          quasLorem ipsum dolor sit, amet consectetur adipisicing elit.
          Perspiciatis esse veniam inventore consectetur? Debitis
          exercitationem ipsa dolorum ea earum quasLorem ipsum dolor sit, amet
          consectetur adipisicing elit. Perspiciatis esse veniam inventore
          consectetur? Debitis exercitationem ipsa dolorum ea earum quas</span>
        <div>
          <button type="button" class="btn btn-info mt-3">
            Download Android
          </button>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-sm-12 col-lg-6 mb-2">
        <img class="d-block w-100 bg-light" src="image/ios1.png" alt="" />
      </div>
      <div class="col-sm-12 col-lg-6 bg-light mb-2">
        <span class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Perspiciatis esse veniam inventore consectetur? Debitis
          exercitationem ipsa dolorum ea earum quas.Lorem ipsum dolor sit,
          amet consectetur adipisicing elit. Perspiciatis esse veniam
          inventore consectetur? Debitis exercitationem ipsa dolorum ea earum
          quasLorem ipsum dolor sit, amet consectetur adipisicing elit.
          Perspiciatis esse veniam inventore consectetur? Debitis
          exercitationem ipsa dolorum ea earum quasLorem ipsum dolor sit, amet
          consectetur adipisicing elit. Perspiciatis esse veniam inventore
          consectetur? Debitis exercitationem ipsa dolorum ea earum quas</span>
        <div>
          <button type="button" class="btn btn-info mt-3">
            Download IOS
          </button>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-sm-12 col-lg-6 mb-2">
        <img class="d-block w-100 bg-light" src="image/windows.png" alt="" />
      </div>
      <div class="col-sm-12 col-lg-6 bg-light mb-2">
        <span class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Perspiciatis esse veniam inventore consectetur? Debitis
          exercitationem ipsa dolorum ea earum quas.Lorem ipsum dolor sit,
          amet consectetur adipisicing elit. Perspiciatis esse veniam
          inventore consectetur? Debitis exercitationem ipsa dolorum ea earum
          quasLorem ipsum dolor sit, amet consectetur adipisicing elit.
          Perspiciatis esse veniam inventore consectetur? Debitis
          exercitationem ipsa dolorum ea earum quasLorem ipsum dolor sit, amet
          consectetur adipisicing elit. Perspiciatis esse veniam inventore
          consectetur? Debitis exercitationem ipsa dolorum ea earum quas</span>
        <div>
          <button type="button" class="btn btn-info mt-3">
            Download Windows
          </button>
        </div>
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

  <script type="text/javascript">
    document.getElementById("login").onclick = function() {
      location.href = "login.php";
    };
  </script>
</body>

</html>