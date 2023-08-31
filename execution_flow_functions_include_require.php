<?php
  // include ("proporciona_datos.php"); // El archivo es incluido y aunque no exista se ejecuta el resto del programa
  require ("proporciona_datos.php"); // El archivo es requerido y si no existe no se ejecuta el resto del programa

  echo "Este es el primer mensaje <br>";
  echo "Este es el segundo mensaje <br>";
  
  try {
    dameDatos();
  } catch (\Throwable $th) {
    echo $th;
  }
?>