<?php
  echo "<h2>Static variables</h2><br>";
  
  function incrementaVariable() {
    // Se ejecuta solo la primera vez que se llama a la función
    // Cuando la función finaliza el valor de la variable se conserva
    static $contador=0;
    $contador++;

    echo $contador . "<br>";
  }

  incrementaVariable();
  incrementaVariable();
  incrementaVariable();
  incrementaVariable();

  echo "<br>";
?>