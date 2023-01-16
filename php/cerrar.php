<?php
session_start();

if(isset($_GET['cerrar'])) {
  session_destroy();

  //Redireccionamos a la pagina index.php

echo '
    <script>
    alert("se ha cerrado la sesion");
    window.location = "../index.html";
    </script>
    ';
}
?>