<?php
session_start();
require "../assets/bdconexion.php";
//echo "la id del producto es ",$_REQUEST['id_producto'];
$id=$_REQUEST['id_producto'];
$sentence = $con->query("SELECT * FROM productos WHERE id_producto='$id'") or die("Error: %s\n" . $con->error);
$producto = mysqli_fetch_assoc($sentence);
$introducir_producto=['nombre'=>$producto['nombre'],'marca'=>$producto['marca'],'precio'=>$producto['precio'],'id'=>$producto['id_producto'],'img'=>$producto['imagen_producto']];
array_push($_SESSION['cesta'],$introducir_producto);
$con=null;
//por si necesito limpiar el carrito durante las pruebas.
//$_SESSION['cesta']=[]; 
//var_dump($_SESSION['cesta']);
header("location:/vapeshop/products.php");
