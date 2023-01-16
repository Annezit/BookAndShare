<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo'
    <script>
        alert("Inicie sesion");
        </script>
        ';
header("location: ../user.html");
session_destroy();
die ();

}

else {
    echo '
    <script>
    alert("sesion iniciada");
    </script>
    ';
    header("location: ../pagar.html");
    exit;
}

?>
