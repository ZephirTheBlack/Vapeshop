<?php
ob_start();
include_once("assets/models/user.php");
include_once("assets/models/registeruser.php");
function registerUser()
{
    include("assets/bdconexion.php");

    if ($_REQUEST['password'] === $_REQUEST['password_confirmation']) {

        $user = new user($_REQUEST['name'], trim(md5($_REQUEST['password'])));
        $query = $con->stmt_init();
        $query->prepare('INSERT INTO usuarios (usuario,contrasena,permisos) VALUES(?,?,?)');
        $name = $user->getName();
        $pass = $user->getPassword();
        $permisos = "usuario";
        $query->bind_param('sss', $name, $pass, $permisos);
        $query->execute();
        $query->close();
        $con->close();

        header("location:index.php");
    } else {
        echo "<div class='row justify-content-center'>
            <div class='alert alert-danger col-2' role='alert' id='alert'>No se ha podido registrar.</div>
        </div>";
    }
}
