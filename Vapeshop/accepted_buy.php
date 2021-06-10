<!doctype html>
<html lang="en">

<head>
    <title>Compra en camino</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/141643de39.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();
    require_once 'assets/layouts/nav.php';
    ?>
    <div class="container shadow p-3 mt-4 rounded mb-4">
        <center>
            <img src="assets/img/box.png" alt="" class="img-fluid">
            <br>
            <br>

            <h4>Su compra ha sido aceptada</h4>
            <p class="text-secondary">Le enviaremos un correo con el codigo de envio en cuanto realizemos el envio.<br> Esto puede tardar de entre 5 a 7 dias laborales.Disculpe las molestias y feliz vapeo</p>
        </center>

    </div>
    <?php
    $_SESSION['cesta']=[];
    require_once 'assets/layouts/footer.php';
  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>