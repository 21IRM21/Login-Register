<?php

// Datos para iniciar la conexión a la base de datos
$server = "host";
$user = "root";
$password = "";
$db = ""; //Introduce el nombre de la base de datos

$conexion = new mysqli ($server, $user, $password, $db);

if ($conexion->connect_errno) {
    echo "Falló la conexión a base de datos: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
    echo "Conexión establecida";
}
?>