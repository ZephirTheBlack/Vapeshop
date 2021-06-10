<!doctype html>
<html lang="en">

<head>
  <title>Inicio</title>
  <link rel="shortcut icon" href="assets/img/vape.png" type="image/x-icon">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/141643de39.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
  <?php
  session_start();
  require_once 'assets/layouts/nav.php';
  ?>
  <div class="container shadow p-3 mb-5 bg-white rounded">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="mx-auto d-block img-fluid" src="assets/img/vapeo.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Bienvenidos a Vapeshop</h5>
            <p>Tu tienda online de vapeo favorita</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="mx-auto d-block img-fluid" src="assets/img/vapeo3.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>¿Intentas dejar de fumar?</h5>
            <p>Nuestro equipo te asesorara de principio a fin</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="mx-auto d-block img-fluid" src="assets/img/vapeo2.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>¿Te gusta el vapeo?</h5>
            <p>Encontraras una gran gama de equipos,liquidos y otros consumibles</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="mx-auto d-block img-fluid" src="assets/img/vapeo4.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>¡A que esperas!</h5>
            <p>Echa un ojo a nuestros <a href="products.php" class="">productos</a></p>
          </div>
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
    <div class="container ">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card shadow mt-4">
            <div class="inner">
              <img src="assets/img/descarga.jpg" alt="" class="card-img-top">
            </div>
            <div class="card-body text-center">
              <h5 class="card-tittle">Deja de fumar</h5>
              <p class="card-text">Miles de personas alrrededor del mundo han conseguido dejar de fumar con este novedoso medoto,el 96% de las personas que se inician al vapeo con la intencion de dejar de fumar lo han logrado exitosamente.</p>
              <a href="#" class="btn btn-primary">Leer más...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card shadow mt-4">
            <div class="inner">
              <img src="assets/img/vape.jpg" alt="" class="card-img-top">
            </div>
            <div class="card-body text-center">
              <h5 class="card-tittle">Beneficios del vapeo</h5>
              <p class="card-text">Si vienes del tabaco los beneficios seran muchos,recuperaras capacidad pulmonar y sentido del gusto.Pero eso es solo el comienzo echa un vistazo a muchos de los estudios realizados por expertos en medicina.</p>
              <a href="#" class="btn btn-primary">Leer más...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card shadow mt-4">
            <div class="inner">
              <img src="assets/img/King.jpg" alt="" class="card-img-top">
            </div>
            <div class="card-body text-center">
              <h5 class="card-tittle">Trucos con vapor</h5>
              <p class="card-text">Tambien puedes aprender a realizar divertidos trucos con el vapor de tu liquido favorito,echa un vistazo a muchas de las cabriolas que puedes hacer con el vapor,tendras que practicar mucho pero lo lograras.</p>
              <a href="#" class="btn btn-primary">Leer más...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    require_once 'assets/layouts/footer.php';
  ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>