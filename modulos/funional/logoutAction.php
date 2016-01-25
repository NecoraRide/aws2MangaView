<?php
  session_start();
  //eliminamos toda la informacion que captamos en el inicio de sesion
  unset($_SESSION["usuario"]);
  //Destruimos la sesion
  session_destroy();
  //redireccionamos a index.php
  header('Location: ../../index.php');
?>
