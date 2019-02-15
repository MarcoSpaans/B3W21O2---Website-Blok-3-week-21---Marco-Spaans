<?php
date_default_timezone_set('Europe/Amsterdam');
$time = date("G");
$now = date("H:i");

if ($time >= 6 && $time < 12) {
  $background = "background-morning";
  $groet = "morgen";
} elseif ($time >= 12 && $time < 18) {
  $background = "background-afternoon";
  $groet = "middag";
} elseif ($time >= 18 && $time <= 23) {
  $background = "background-evening";
  $groet = "avond";
} elseif ($time >= 0 && $time < 6) {
  $background = "background-night";
  $groet = "nacht";
}

echo "<h1>Goede ".$groet."</h1>";
echo "<h2>Het is nu ".$now."</h2>";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/B3W2101.css">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="<?php echo $background; ?>">



  </body>
</html>
