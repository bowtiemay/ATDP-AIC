<html>

<head>
  <link rel = "stylesheet" href = "prj1.css">

</head>

</html>

<?php

  //var_dump($_POST);

  $fquestion1 = $_POST["question1"];
  $fquestion2 = $_POST["question2"];
  $fquestion3 = $_POST["question3"];
  $fquestion4 = $_POST["question4"];
  $fquestion5 = $_POST["question5"];
  $fquestion6 = $_POST["question6"];
  $fquestion7 = $_POST["question7"];
  $fquestion8 = $_POST["question8"];
  $fquestion9 = $_POST["question9"];
  $fquestion10 = $_POST["question10"];

  $inputlist = array($fquestion1, $fquestion2, $fquestion3, $fquestion4, $fquestion5,
                      $fquestion6, $fquestion7, $fquestion8, $fquestion9, $fquestion10);

  $scottstreetcount = 0;
  $kyotocount = 0;
  $saviorcomplexcount = 0;
  $iknowtheendcount = 0;
  $killercount = 0;

  for ($i = 0; $i < count($inputlist); $i++) {
    if ($inputlist[$i] == "scottstreet") {
      $scottstreetcount++;
    }
    elseif ($inputlist[$i] == "kyoto") {
      $kyotocount++;
    }
    elseif ($inputlist[$i] == "saviorcomplex") {
      $saviorcomplexcount++;
    }
    elseif ($inputlist[$i] == "iknowtheend") {
      $iknowtheendcount++;
    }
    elseif ($inputlist[$i] == "killer") {
      $killercount++;
    }
  }

  // echo "<p>$scottstreetcount</p>";
  // echo "<p>$kyotocount</p>";
  // echo "<p>$saviorcomplexcount</p>";
  // echo "<p>$iknowtheendcount</p>";
  // echo "<p>$killercount</p>";

  if ($scottstreetcount >= $kyotocount && $scottstreetcount >= $saviorcomplexcount && $scottstreetcount >=
      $iknowtheendcount && $scottstreetcount >= $iknowtheendcount && $scottstreetcount >= $killercount) {
        echo "<h4>You may relate to \"Scott Street\".</h4>";
        echo "<video width=\"320\" height=\"240\" controls><source src=\"https://www.youtube.com/watch?v=BBBxzmyeNdw\"></video>";
  }

  elseif ($kyotocount >= $scottstreetcount && $kyotocount >= $saviorcomplexcount && $kyotocount >=
          $iknowtheendcount && $kyotocount >= $killercount) {
            echo "<h2>You may relate to \"Kyoto\".</h2>";
            echo "<video width=\"320\" height=\"240\" controls><source src=\"https://www.youtube.com/watch?v=Tw0zYd0eIlk\"></video>";
          }

  elseif ($saviorcomplexcount >= $scottstreetcount && $saviorcomplexcount >= $kyotocount && $saviorcomplexcount >=
          $iknowtheendcount && $saviorcomplexcount >= $killercount) {
            echo "<h2>You may relate to \"Savior Complex\".</h2>";
            echo "<video width=\"320\" height=\"240\" controls><source src=\"https://www.youtube.com/watch?v=VJlR3pvgLQA\"></video>";
          }
  elseif ($iknowtheendcount >= $scottstreetcount && $iknowtheendcount >= $kyotocount && $iknowtheendcount >=
          $saviorcomplexcount && $iknowtheendcount >= $killercount) {
            echo "<h2>You may relate to \"I Know The End\".</h2>";
            echo "<video width=\"320\" height=\"240\" controls><source src=\"https://www.youtube.com/watch?v=WJ9-xN6dCW4\"></video>";
          }
  elseif ($$killercount >= $scottstreetcount && $killercount >= $kyotocount && $killercount >=
          $saviorcomplexcount && $killercount >= $iknowtheendcount) {
            echo "<h2>You may relate to \"Killer\".</h2>";
            echo "<video width=\"320\" height=\"240\" controls><source src=\"https://www.youtube.com/watch?v=psZuC10Oa4E\"></video>";
          }

  echo "<p>(Note: Copy the image address to view the video.)</p>"




 ?>
