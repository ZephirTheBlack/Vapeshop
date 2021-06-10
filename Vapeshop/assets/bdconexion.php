<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'vapeshop';
$con = new mysqli($server, $username, $password, $database) or die("No se ha realizado exitosamente la conexion a la base de datos");