<html>

<head>
  <style>
  </style>
  <link rel="stylesheet" href="x2.css" />
</head>

</html>

<?php

  include 'header.php';

  printHeader();

  $fname = $_POST["name"];
  $fcatsordogs = $_POST["catsordogs"];
  $ffavnumber = $_POST["favnumber"];
  $ffavcolor = $_POST["favcolor"];
  $fdate = $_POST["date"];
  $fcity = $_POST["favcity"];
  $ffavoritething = $_POST["favoritething"];

  $inputlist = array("name" => $fname, "catsordogs" => $fcatsordogs,
                  "favnumber" => $ffavnumber, "favcolor" => $ffavcolor,
                  "date" => $fdate, "favcity" => $fcity,
                  "favoritething" => $ffavoritething);

  echo "<table>";
  echo "<tr>";

  foreach ($inputlist as $key => $value) {
    echo "<tr><td>";
    echo htmlspecialchars($key);
    echo "</td><td>";
    echo htmlspecialchars($value);
    echo "</td></tr>";
  }

  echo "</tr>";
  echo "</table>";




 ?>
