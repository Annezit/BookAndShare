<?php

$conexion = mysqli_connect("localhost", "root", "", "login_register_db");

if ($conexion) {
    echo 'Conectado a la base de datos';
} else 
{ echo 'Error para conectar a la base de datos';
}

?>