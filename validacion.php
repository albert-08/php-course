<?php
  if (isset($_POST["enviando"])) {
    $usuario=$_POST["nombre_usuario"];
    $edad=$_POST["edad_usuario"];

    if ($usuario=="Juan" && $edad>=18) {
      echo "<p style=\"font-size:18px;color:#0C3;font-weight:bold;\">Puedes entrar</p>";
    } else {
      echo "<p style=\"font-size:18px;color:#F00;font-weight:bold;\">No puedes entrar</p>";
    } 
  }    
?>