<?php
ob_start();

include("../assets/bdconexion.php");

$resultado = $con->query("DELETE FROM productos WHERE id_producto= " . $_REQUEST['id_producto'] . ";") or die("Error: %s\n" . $con->error);

if ($resultado) {
    echo '<script language="javascript">alert("fila eliminada con exito¡");</script>';
    header("location:/vapeshop/products.php");
} else {
    echo '<script language="javascript">alert("El producto no han sido eliminado");</script>';
    header("location:/vapeshop/products.php");
}

$con = null;
