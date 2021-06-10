<!doctype html>
<html lang="en">

<head>
    <title>Registro</title>
    <link rel="shortcut icon" href="assets/img/vape.png" type="image/x-icon">
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
    include 'functions/register_functions.php';
    ?>

    <div class="container  shadow mt-3 rounded mb-5">
        <div class="row">
            <div class="col-md-6 mx-auto mb-4 ">

                <center>
                    <h2>Create una cuenta con nosotros</h2>
                </center>

                <div class="card border-0 bg-light px-4 py-2 shadow rounded">

                    <form action="" method="post" onsubmit="validate_register() ">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nombre de usuario:</label>
                                <input class="form-control border-0" type="text" id="nombre" name="name" placeholder="Tu nombre de usuario..." value="">
                            </div>

                            <div class="form-group">
                                <label for="">Contraseña:</label>
                                <input class="form-control border-0" type="password" id="password" name="password" placeholder="Tu contraseña...">
                            </div>

                            <div class="form-group">
                                <label for="">Repite la contraseña:</label>
                                <input class="form-control border-0" type="password" id="password_confirmation" name="password_confirmation" placeholder="Repite tu contraseña...">
                            </div>

                            <button class="btn btn-primary btn-block" dusk="register-btn">Registrate</button>
                        </div>
                    </form>
                    <center><span>o <a href="login.php">Logeate</a></span></center>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once 'assets/layouts/footer.php';
  ?>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST['name'])) {
            echo "<div class='row justify-content-center'>
                <div class='alert alert-danger col-2' role='alert'>Por favor introduzca el nombre de usuario.</div>
            </div>";
        } else {
            if (isset($_POST['name']) && ctype_alpha($_POST['name'])) {
                $usu = trim($_POST['name']);
            } else {
                echo "<div class='row justify-content-center'>
                    <div class='alert alert-danger col-2' role='alert'>El nombre de usuario que ha introducido no es correcto.</div>
                </div>";
            }
        }
        if (isset($_POST['password'])) {

            if ($_POST['password'] === $_POST['password_confirmation']) {
                $pass = trim(md5($_POST['password']));
            } else {
                echo "<div class='row justify-content-center'>
                <div class='alert alert-danger col-2' role='alert'>Las contraseñas no coinciden.</div>
            </div>";
            }
        } else {
            echo "<div class='row justify-content-center'>
                <div class='alert alert-danger col-2' role='alert'>Por favor introduzca la contraseña.</div>
            </div>";
        }

        if (isset($usu) && isset($pass)) {
            registerUser();
        }
    }
    ?>
    <!-- Optional JavaScript -->
    <script src="validation.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>