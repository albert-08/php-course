<?php
  echo "<h2>Mathematical Functions</h2>";

  echo "<h3>rand</h3>";

  echo "
    <ul>
      <li>Generate a random integer</li>
      <li>If called without the optional min, max arguments rand() returns a pseudo-random integer between 0 and getrandmax(). If you want a random number between 5 and 15 (inclusive), for example, use rand(5, 15).</li>
    </ul>
  ";

  $num1=rand(10,50);

  echo "<p>Este es un número aleatorio: " . $num1 . "</p>";

  echo "<h3>pow — Exponential expression</h3>";

  echo "
    <ul>
      <li>Returns num raised to the power of exponent.</li>
      <li>num raised to the power of exponent. If both arguments are non-negative integers and the result can be represented as an integer, the result will be returned with int type, otherwise it will be returned as a float.</li>
    </ul>
  ";

  $num2=pow(5, 3);

  echo "<p>El resultado de elevar 5 a la 3 es: " . $num2 ."</p>";

  echo "<h3>round — Rounds a float</h3>";

  echo "
    <ul>
      <li>Returns the rounded value of num to specified precision (number of digits after the decimal point). precision can also be negative or zero (default).</li>
      <li>The value rounded to the given precision as a float.</li>
    </ul>
  ";

  $num3=round(5.25);

  echo "<p>5.25 redondeado es: " . $num3 ."</p>";

  $num4=round(5.7556454,2);

  echo "<p>5.7556454 redondeado a dos decimales es: " . $num4 ."</p>";

  echo "<h3>Casting</h3>";

  echo "
    <ul>
      <li>Casting implicito.</li>
      <li>El tipo de variable se asigna de manera dinámica.</li>
    </ul>
  ";

  $num5="5";
  $num5+=2;
  $num6=$num5+5.75;

  echo "El número es: " . $num6;

  echo "
    <ul>
      <li>Casting explicito.</li>
      <li>Se coloca el tipo al principio de la variable.</li>
    </ul>
  ";

  $num7="5";
  $resultado=(int)$num1;

  echo "El número es: " . $resultado;

  echo "<br>";
?>