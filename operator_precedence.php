<?php
  echo "<h2>Operator Precedence</h2>";

  $var1=true;
  $var2=false;

  echo "<h3>&&</h3>";
  
  echo "<p>$var1 && $var2</p>";

  $resultado=$var1 && $var2; // resultado=false
  
  if ($resultado==true) {
    echo "Correcto";
  } else {
    echo "Incorrecto";
  }

  echo "<h3>and</h3>";

  echo "<p>$var1 and $var2</p>";

  $resultado=$var1 and $var2; // resultado=true

  if ($resultado==true) {
    echo "Correcto";
  } else {
    echo "Incorrecto";
  }
?>