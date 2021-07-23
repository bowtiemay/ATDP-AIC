<html>

<head>
  <style>
  </style>
  <link rel="stylesheet" href="hw2.css" />
</head>

</html>


<?php

  $hottakes = array("WandaVision" => "WandaVision was a terrible terrible show",
                    "The French Revolution" => "Marie Antoinettes boat hair was hot",
                    "Music" => "Death metal is better than mainstream music",
                    "Friends" => "Rachel was a closeted lesbian",
                    "Marvel" => "Captain America is a toxic asshole who should have died in one of the first movies that he appeared in",
                    "Star Trek" => "The origanal Star Trek is the reason why humanity deserves to die",
                    "Canada" => "Ben Shapiro loves gay people",
                    "Coding" => "Java is better than Python because it's way more fire",
                    "Capitalists" => "Jeff Bezos follows PETA on FaceBook");

  echo "<table>";
  echo "<tr>";

  ksort($hottakes);
  // uksort($hottakes, "my_sort");


  foreach ($hottakes as $key => $value) {
    if (strpos($value, 'hot') == true || strpos($value, 'fire') == true) {
      $value = str_rot13($value);
      echo "<tr><td class = \"hotorfire\">{$key}<td class=\"hotorfire\">{$value}</td></tr>";
    }

    else {
      $value = str_rot13($value);
    	echo "<tr><td>{$key}</td><td>{$value}</td></tr>";
    }
  }

  echo "</tr>";
  echo "</table>";


  // function my_sort($arry) {
  //   foreach ($arry as $key => $value) {
  //     if (strpos($value, 'The') == true)
  //       return array_splice($arry, 0, 5);
  //
  //     elseif (strpos($value, 'A') == true)
  //       return array_splice($arry, 0, 1);
  //   }
  // }

?>
