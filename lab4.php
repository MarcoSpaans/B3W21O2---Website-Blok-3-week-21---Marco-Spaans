<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    define("string", "this is a string", true);
    define("boolean", true, true);
    define("integer", 5849, true);

    if (string == "this is a string") {
      echo "<p>".string."</p>";
    }

    if (boolean == true) {
      echo "<p>".boolean."</p>";
    }

    if (integer == 5849) {
      echo "<p>".integer."</p>";
    }

     ?>

  </body>
</html>
