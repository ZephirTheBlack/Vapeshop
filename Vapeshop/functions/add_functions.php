<?php
ob_start();
function addproduct($marca, $modelo, $tipo)
{
    include("assets/bdconexion.php");
    $precio=$_REQUEST['precio'];
    if (isset($_REQUEST['descripcion'])) {
        $descripcion = trim($_REQUEST['descripcion']);
        $query = $con->stmt_init();
        $query->prepare('INSERT INTO productos (nombre,marca,tipo,descripcion,precio) VALUES(?,?,?,?,?)');
        $query->bind_param('ssssi', $marca, $modelo, $tipo,$descripcion,$precio);
        $query->execute();
        $query->close();
        $con->close();
    } else {
        $query = $con->stmt_init();
        $query->prepare('INSERT INTO productos (nombre,marca,tipo,precio) VALUES(?,?,?,?)');
        $query->bind_param('sssi', $marca, $modelo, $tipo,$precio);
        $query->execute();
        $query->close();
        $con->close();
    }
    $con=null;
    header("location:products.php");
}
