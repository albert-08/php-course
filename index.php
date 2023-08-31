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
    }
    h2 {
      background-color: yellow;
      text-align: center;
      color: #0F0;
    }
  </style>
</head>
<body>
  <?php
    echo "<h1>PHP course</h1>";

    print "Hello world! <br>";
    print "Welcome to php course <br>";

    echo "<br>";

    echo "<h2>Variables, comments, print, and echo</h2><br>";
    include "variables_comments_print_echo.php";

    echo "<br>";

    echo "<h2>Execution flow, functions, include and require</h2><br>";
    include "execution_flow_functions_include_require.php";

    echo "<br>";

    echo "<h2>Variable scope</h2><br>";
    include "variable_scope.php";
    
    echo "<br>";

    echo "<h2>Static variables</h2><br>";
    include "static_variables.php";
  ?>
</body>
</html>