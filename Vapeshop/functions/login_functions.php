<?php
ob_start();
include_once("assets/models/user.php");
function validUsr($user)
{ //funcion para validar usuarios y logearse correctamente 
    require "assets/bdconexion.php";

    $usucheck = false;
    $passcheck = false;
    $usu = $user->getName();
    $pass = $user->getPassword();
    $sentence = $con->query("SELECT id_usuario,usuario,contrasena,permisos FROM usuarios WHERE usuario='$usu' AND contrasena='$pass'") or die("Error: %s\n" . $con->error);
    $datos = mysqli_fetch_assoc($sentence);

    if ($datos['usuario'] == $user->getName() && $datos['contrasena'] == $user->getPassword()) {
        $usucheck = true;
        $passcheck = true;

        startsesion($datos['id_usuario'], $datos['permisos'], $datos['usuario']);

        header("Location: index.php");
    }

    if ($usucheck == false && $passcheck == false) {
        echo "<div class='row justify-content-center'>
            <div class='alert alert-danger col-2' role='alert' id='alert'>Usuario o contraseña no encontrados.</div>
        </div>";
    }
}

function createCookie($name)
{ //funcion para crear la cookie
    if (isset($_REQUEST["remenberme"])) {
        $caducidad = time() + 3600;
        setcookie('cookieid', $name, $caducidad);
    } else {
        setcookie('cookieid', $name);
    }
}

function startsesion($id, $permisos, $name)
{ //funcion para iniciar la sesion
    createCookie($name);
    $_SESSION['permisos'] = $permisos;
    $_SESSION['login'] = true;
    if (!isset($_SESSION["id"])) {

        $_SESSION["id"] = $id;
    }

    if (!isset($_SESSION['cesta'])) {

        $_SESSION['cesta'] = array();
    }

}
