<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    h1 {
      background-color: gray;
      text-align: center;
      color: #00F;
      font-weight: bold;
    }
    h2 {
      background-color: yellow;
      text-align: center;
      color: #000;
      font-weight: bold;
    }
    h3 {
      background-color: #0F0;
      text-align: center;
      color: #000;
      font-weight: bold;
    }
    h4 {
      background-color: #00F;
      text-align: center;
      color: #000;
      font-weight: bold;
    }
    .resaltar {
      color: #F00;
      font-weight: bold;
    }
    .resaltar {
      color: #F00;
      font-weight: bold;
    }
    .resaltar_dos {
      color: #0F0;
      font-weight: bold;
    }
    .resaltar_tres {
      color: #00F;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <?php
    echo "<h1>PHP course</h1>";

    print "Hello world! <br>";
    print "Welcome to php course <br>";

    include "variables_comments_print_echo.php";
    include "execution_flow_functions_include_require.php";
    include "variable_scope.php";
    include "static_variables.php";
    include "strings.php";
    include "comparison_operators.php";
    include "constants.php";
  ?>
  <h2>Arithmetic and Incrementing/Decrementing Operators</h2>
  <p>&nbsp;</p>
  <form action="" method="post">
    <label for="num1">Numero 1</label>
    <input type="text" name="num1" id="num1">
    <label for="num2">Numero 2</label>
    <input type="text" name="num2" id="num2">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option value="Suma">Suma</option>
      <option value="Resta">Resta</option>
      <option value="Multiplicación">Multiplicación</option>
      <option value="División">División</option>
      <option value="Módulo">Módulo</option>
      <option value="Incremento">Incremento</option>
      <option value="Decremento">Decremento</option>
    </select>
    <input type="submit" value="Enviar" name="button" id="button">
  </form>
  <p>&nbsp;</p>
  <?php
    include "calculadora.php";

    if (isset($_POST["button"])) {
      $numero1=$_POST["num1"];
      $numero2=$_POST["num2"];
      $operacion=$_POST["operacion"];

      calcular($operacion);
    }  
  ?>
  <br>
  <?php include "mathematical_functions.php"; ?>
</body>
</html>