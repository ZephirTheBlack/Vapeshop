<?php
session_start();
/* print_r($_SESSION['cesta']);
echo "<br>"; */
$aux = [];
foreach ($_SESSION['cesta'] as $producto) {
    if (in_array($_REQUEST['id_producto'], $producto)) {
        continue;
    }else {
        array_push($aux, $producto);
    }
};
$_SESSION['cesta'] = $aux;
header("location:/vapeshop/mybuy.php");
/* echo "<br>";
print_r($_SESSION['cesta']); */
