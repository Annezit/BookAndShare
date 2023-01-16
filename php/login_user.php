<?php

session_start();

include 'conexion_backend.php';

$correo= $_POST ['correo'];
$contrasena= $_POST ['contrasena'];

$login_entrar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena'");

if (mysqli_num_rows($login_entrar) > 0) {
    $_SESSION ['usuario'] = $correo;
    echo '
    <script>
    alert("Sesion iniciada correctamente");
    window.location = "../pagar.html";
    </script>
   ';
  exit();

}else{
    echo '
    <script>
    alert("El usuario no existe, por favor inicie sesion");
    window.location = "../user.html";
    </script>
    ';
    exit;
}


?>