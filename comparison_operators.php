<?php
  echo "<h2>Comparison Operators</h2>";

  $variable1="8";
  $variable2="8";
  $variable3="Juan";

  if ($variable1==$variable2) {
    echo "Son iguales";
  } else {
    echo "No son iguales";
  }

  if ($variable1===$variable2) {
    echo "Son iguales";
  } else {
    echo "No son iguales";
  }
  
  if ($variable1==$variable3) {
    echo "Son iguales";
  } else {
    echo "No son iguales";
  }

  if ($variable1!=$variable3) {
    echo "Son diferentes";
  } else {
    echo "No son diferentes";
  }
?>