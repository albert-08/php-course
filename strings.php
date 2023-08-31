<?php
  echo "<h2>Strings</h2><br>";

  $nombre="Juan";

  echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";
  echo '<p class="resaltar_dos">Esto es un segundo ejemplo de frase</p>';
  echo "<p class=\"resaltar_tres\">Esto es un tercer ejemplo de frase</p>";

  echo "<span>Hola $nombre</span><br>";

  $variable1="Casa";
  $variable2="CASA";

  echo "<h3>String comparison:</h3>";
  
  echo "<h4>strcmp</h4>";
  echo "<p>Comparación de string segura a nivel binario.</p>";
  echo "<p>Esta comparación considera mayúsculas y minúsculas.</p>";
  echo "<p>Devuelve < 0 si str1 es menor que str2; > 0 si str1 es mayor que str2 y 0 si son iguales.</p>";
  
  $resultado=strcmp($variable1,$variable2);

  if (!$resultado) {
    echo "<p>Los strings $variable1 y $variable2: Coinciden</p>";
  } else {
    echo "<p>Los strings $variable1 y $variable2: No coinciden</p>";
  }  

  echo "<h4>strcasecmp</h4>";
  echo "<p>Comparación de string segura a nivel binario e insensible a mayúsculas y minúsculas.</p>";
  echo "<p>Devuelve < 0 si str1 es menor que str2; > 0 si str1 es mayor que str2 y 0 si son iguales.</p>";

  $resultado=strcasecmp($variable1,$variable2);

  if (!$resultado) {
    echo "<p>Los strings $variable1 y $variable2: Coinciden</p>";
  } else {
    echo "<p>Los strings $variable1 y $variable2: No coinciden</p>";
  }
  
  echo "<br>";
?>