<?php

// Datos para iniciar la conexión a la base de datos
$server = "host";
$user = "root";
$password = "";
$db = ""; //Introduce el nombre de la base de datos

$mysqli = new mysqli ($server, $user, $password, $db);

if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else {
    echo "Conexión establecida";
}
?>