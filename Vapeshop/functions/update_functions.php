<?php
ob_start();
function subir($img){//funcion para subir las imagenes

	$carpeta="./imgproductos/";
	if (!is_dir($carpeta)) {
		mkdir($carpeta);
	}

	$nombreTmp=$img['tmp_name'];
	echo '<p>lanzado nombre temporal</p>';
	$nombre=$carpeta.$img['name'];
	echo '<p>lanzado nombre definitivo</p>';
	$resultado=copy($nombreTmp,$nombre);

	if ($resultado) {
		unlink($nombreTmp);
		return $nombre;
	}else{
		return "1";
	}
}
function modifyproduct()
{
    include 'assets/bdconexion.php';

    $id_producto = $_REQUEST['id_producto'];
    $nombre = $_REQUEST['nombre'];
    $marca = $_REQUEST['marca'];
    $tipo = $_REQUEST['tipo'];
    $descripcion = $_REQUEST['descripcion'];
    $precio = $_REQUEST['precio'];
    $imagen=$_FILES['imagen_producto'];
	$ruta=subir($imagen);

    $resultado = $con->query("UPDATE productos SET nombre='$nombre',marca='$marca',tipo='$tipo',descripcion='$descripcion',precio='$precio',imagen_producto='$ruta'WHERE id_producto='$id_producto';") or die("Error: %s\n" . $con->error);
    if ($resultado) {
        echo '<script language="javascript">alert("los datos han sido modificados con exito");</script>';
        header("location:products.php");
    } else {
        echo '<script language="javascript">alert("los datos no han sido modificados correctamente");</script>';
        header("location:products.php");
    }
    $con = null;
}
