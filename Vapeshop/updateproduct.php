<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
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
    ob_start();
    session_start();
    include 'assets/bdconexion.php';
    require_once 'assets/layouts/nav.php';
    include 'functions/update_functions.php';

    $id_producto = $_REQUEST['id_producto'];

    $sentencia = "SELECT * from productos where id_producto='$id_producto'" or die("Error: %s\n" . $con->error);
    $resultado = mysqli_query($con, $sentencia);
    $fila = $resultado->fetch_assoc();

    ?>
    <div id="updateproducts">

        <center>
            <h2>Edita los datos de este producto</h2>
        </center>

        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <div class="card border-0 bg-light px-4 py-2">
                        <form action="" method="post" onsubmit="validate_update()"  enctype="multipart/form-data">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input class="form-control border-0" type="text" name="nombre" id="nombre" placeholder="Actualiza el nombre..." value="<?php echo $fila['nombre']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Marca</label><input class="form-control border-0" type="text" name="marca" id="marca" placeholder="Actualiza la marca..." value="<?php echo $fila['marca']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Tipo</label><input class="form-control border-0" type="text" name="tipo" id="tipo" placeholder="Actualiza el tipo..." value="<?php echo $fila['tipo']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Precio</label><input class="form-control border-0" type="number" name="precio" id="precio" placeholder="Actualiza el precio..." value="<?php echo $fila['precio']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Descripcion</label><textarea class="form-control border-0" name="descripcion" id="descripcion" cols="30" rows="5" placeholder="Actualiza la descripcion..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Imagen</label>
                                    <input type="file" name="imagen_producto">
                                </div>
                                <button class="btn btn-primary btn-block">Modificar</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_REQUEST['nombre'])&&isset($_REQUEST['precio'])) {
            modifyproduct();
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