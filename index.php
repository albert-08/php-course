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
  ?>
</body>
</html>