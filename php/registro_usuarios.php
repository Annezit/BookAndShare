<?php

include 'conexion_backend.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo= $_POST ['correo'];
$contrasena= $_POST ['contrasena'];

//-----encriptar contraseña------
//$contrasena= hash('sha512', $contrasena);

$registro = "INSERT INTO usuarios (nombre, apellido, correo, contrasena) VALUES ('$nombre', '$apellido', '$correo', '$contrasena')";

//comprobacion correo unico bbdd//
$correo_comprobar = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' ");
if(mysqli_num_rows($correo_comprobar)  > 0){
    echo '
     <script>
     alert("El correo que intenta registrar ya existe");
     window.location = "../user.html";
     </script>
    ';
   exit();
}
//fin comprobacion correo//

$ejecutar = mysqli_query($conexion, $registro);

if($ejecutar){
    echo '
    <script>
    alert("Usuario registrado");
    window.location = "../user.html";
    </script>
    ';
}else{
    echo '
    alert("No se ha podido registrar usuario");
    window.location = "../user.html";
    </script>
    ';
}

mysqli_close($conexion);

?>