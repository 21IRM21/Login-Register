<?php
include "connection.php";

$nombre = trim($_POST['nombre']);
$correo = trim($_POST['correo']);
$user = trim($_POST['user']);
$contrasena = trim($_POST['contrasena']);

if(empty($nombre) ||empty($correo)||empty($user)||empty($contrasena)){
    echo "Por favor rellena todos los campos";
}

// Insertar datos en la base de datos
$insertDatos = "INSERT INTO registro ('Nombre', 'Email', 'Usuario', 'Password'
                       VALUES ($nombre , $correo, $user, $contrasena)";
$ejecutar = mysqly_query ($conexion,$insertDatos);

if(mysqly_num_rows($ejecutar) > 0){

    echo'
       <script>
           alert ("Los datos han sido enviados correctamente a la base de datos");
       </script>
       windows.location = "../index.php";
    ';
}


?>