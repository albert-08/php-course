<?php
  $nombre="Lorena";

  function dameNombre() {
    /* 
      Cambia el ámbito de la variable a global
      Hace referencia a la variable que está fuera de la  
      Siempre se utiliza global dentro de la función
      Hace global la variable que se encuentra fuera
    */
    global $nombre;
    // Ámbito de función, es una variable diferente a la que está fuera de la función
    $nombre="El nombre es " . $nombre;
  }

  dameNombre();

  echo $nombre;
?>