<?php
  if (isset($_POST["enviando"])) {
    $edad=$_POST["edad_usuario"];

    if ($edad<=18) {
      echo "<p style=\"font-size:18px;color:#F00;font-weight:bold;\">Eres menor de edad</p>";
    } else if ($edad<=40) {
      echo "<p style=\"font-size:18px;color:#0C3;font-weight:bold;\">Eres joven</p>";
    } else if ($edad<=65) {
      echo "<p style=\"font-size:18px;color:#0C3;font-weight:bold;\">Eres maduro</p>";
    } else {
      echo "<p style=\"font-size:18px;color:#F00;font-weight:bold;\">Cuídate</p>";
    }
  }
?>