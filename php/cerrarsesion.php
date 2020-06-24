<?php
  session_start();
  var_dump(session_get_cookie_params());
  unset($_SESSION["sesion"]); 
  unset($_SESSION["datos"]); 
  unset($_SESSION["zona"]); 
  unset($_SESSION["fila"]); 
  unset($_SESSION["asiento"]); 
  unset($_SESSION["numero_abonado"]); 
  unset($_SESSION["iban"]);
  session_destroy();
  header("Location: ../index.html");
  exit;
?>

