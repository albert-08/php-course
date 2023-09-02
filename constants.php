<?php
  echo "<h2>Constants</h2><br>";

  echo "
    <ul>
      <li>El nombre de las constantes ha de ir en mayúsculas (convenio).</li>
      <li>El nombre de las constantes no debe llevar el símbolo $.</li>
      <li>Es obligatorio el uso de la función define() para definir constantes.</li>
      <li>El ámbito de las constantes es global por defecto.</li>
      <li>Las constantes no se pueden redefinir.</li>
      <li>Las constantes solo pueden almacenar valores escalares.</li>
    </ul>
  ";

  define("AUTOR", "Juan", true);
  // define("AUTOR", "Mariana");

  echo "El autor es: " . AUTOR . "<br>";
  
  try {
    echo "El autor es: " . autor . "<br>";
  } catch (\Throwable $th) {
    echo $th;
  }

  echo "<h3>Predefined Constants</h3>";

  echo "La línea de esta instrucción es: " . __LINE__ . "<br>";
  echo "Estamos trabajando con este fichero: " . __FILE__;

  echo "<br>";
?>