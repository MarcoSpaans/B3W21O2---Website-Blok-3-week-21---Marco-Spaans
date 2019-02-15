<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    echo "<p>Hello world!</p>";

    define("GREETING", "Hello world!", true);
    echo "<p>".greeting."</p>";

    $var = ["learning PHP", "hello world!"];
    echo "<p>".$var[1]."</p>";

    $var2 = ["hello", "world!"];
    echo "<h1>".$var2[0]." ".$var2[1]."</h1>";

    $var3 = array("hello", "world!");
    echo "<h1>".$var3[0]." ".$var3[1]."</h1>";

     ?>

  </body>
</html>
