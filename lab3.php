<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    echo(rand(1,100) * rand(1,100));

    function table()
    {
      $number = [3, 5, 8, 12];
      for ($i=0; $i < 4; $i++) {
        echo "<p>6 x ".$number[$i]." = ".(6 * $number[$i])."</p>";
      }
    }

  table();

     ?>

  </body>
</html>
