<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "logindatos";

$conexion = mysqli_connect($server, $user, $pass, $bd);

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
} else {
    echo "Connected successfully";
}


?>
