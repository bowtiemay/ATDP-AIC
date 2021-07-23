<!DOCTYPE html>
<html lang="en">
<head>
  <link rel = "stylesheet" href = "prj1.css">
  <title>P1: Final</title>
  <script src="p1.js"></script>
  <style>
  .printout {
    margin-left: 25px;
    color: rgb(203, 214, 207);
  }
  </style>
</head>
</html>

<?php
  include 'functions.php';

  printHeading();

  //var_dump($_POST);
  echo "<div class = \"scroll-bg\">";
  echo "<div class = \"printout\">";

  if(isset($_POST["firstname"])) {
    $ffirstname = htmlspecialchars($_POST["firstname"]);
  }
  else {
    $ffirstname = "[N/A]";
    echo "<p>You did not enter a valid first name input.</p>";
  }

  if(isset($_POST["lastname"])) {
    $flastname = htmlspecialchars($_POST["lastname"]);
  }
  else {
    $flastname = "[N/A]";
    echo "<p>You did not enter a valid last name input.</p>";
  }

  if(isset($_POST["pronouns"])) {
    $fpronouns = $_POST["pronouns"];
  }
  else {
    echo "<p>You didn't enter a valid pronoun input.</p>";
    $fpronouns = array();
  }

  if(isset($_POST["birthday"])) {
    $fbirthday = htmlspecialchars($_POST["birthday"]);
  }
  else {
    echo "<p>You did not enter a valid birthday input.</p>";
    $fbirthday = "2000/01/01 (not specified)";
  }

  if(isset($_POST["email"])) {
    $femail = htmlspecialchars($_POST["email"]);
  }
  else {
    echo "<p>You did not enter a valid email input.</p>";
    $femail = "boohoo@unspecifiedemail.hmm (You didn't specify a valid email.)";
  }

  if(isset($_POST["phone"])) {
    $fphone = htmlspecialchars($_POST["phone"]);
  }
  else {
    $fphone = "1-877-CARS4KIDS (You didn't specify a valid address.)";
    echo "<p>You did not enter a valid phone number input.</p>";
  }

  if(isset($_POST["fingers"])) {
    $ffingers = htmlspecialchars($_POST["fingers"]);
  }
  else {
    $ffingers = "0 (You didn't specify a valid number of fingers.)";
    echo "<p>You did not enter a valid number of fingers.</p>";
  }

  if(isset($_POST["favcolor"])) {
    $ffavcolor = htmlspecialchars($_POST["favcolor"]);
  }
  else {
    $ffavcolor = "neon yellow (You didn't specify a valid favorite color input.)";
    echo "<p>You did not enter a valid favorite color input.</p>";
  }


  if (($ffirstname == "rick" || $ffirstname == "RICK" || $ffirstname == "Rick") && ($flastname == "astley" || $flastname == "ASTLEY" || $flastname == "Astley")) {
    echo "<br><audio controls autoplay>
      <source src=\"rickroll.mp3\" type=\"audio/mp3\">
      Your browser does not support the audio element.
    </audio>";
  }

  //$bioinfo = array($fname, $fgender, $fbirthday, $fbirthday, $femail, $faddress);

  if(isset($_POST["question1"])) {
    $fquestion1 = htmlspecialchars($_POST["question1"]);
  }
  else {
    echo "<p>You did not enter a valid input for question 1.</p>";
    $fquestion1 = "none";
  }

  if(isset($_POST["question2"])) {
    $fquestion2 = htmlspecialchars($_POST["question2"]);
  }
  else {
    echo "<p>You did not enter a valid input for question 2.</p>";
    $fquestion2 = "none";
  }

  if(isset($_POST["question3"])) {
    $fquestion3 = htmlspecialchars($_POST["question3"]);
  }
  else {
    echo "<p>You did not enter a valid input for question 3.</p>";
    $fquestion3 = "none";
  }

  if(isset($_POST["question4"])) {
    $fquestion4 = htmlspecialchars($_POST["question4"]);
  }
  else {
    echo "<p>You did not enter a valid input for question 4.</p>";
    $fquestion4 = "none";
  }

  if(isset($_POST["question5"])) {
    $fquestion5 = htmlspecialchars($_POST["question5"]);
  }
  else {
    echo "<p>You did not enter a valid input for question 5.</p>";
    $fquestion5 = "none";
  }

  if(isset($_POST["question6"])) {
    $fquestion6 = htmlspecialchars($_POST["question6"]);
  }
  else {
    echo "<p>You did not enter a valid input for question 6.</p>";
    $fquestion6 = "none";
  }

  if(isset($_POST["question7"])) {
    $fquestion7 = htmlspecialchars($_POST["question7"]);
  }
  else {
    echo "<p>You did not enter a valid input for question 7.</p>";
    $fquestion7 = "none";
  }

  if(isset($_POST["question8"])) {
    $fquestion8 = htmlspecialchars($_POST["question8"]);
  }
  else {
    echo "<p>You did not enter a valid input for question 8.</p>";
    $fquestion8 = "none";
  }

  if(isset($_POST["question9"])) {
    $fquestion9 = htmlspecialchars($_POST["question9"]);
  }
  else {
    echo "<p>You did not enter a valid input for question 9.</p>";
    $fquestion9 = "none";
  }

  if(isset($_POST["question10"])) {
    $fquestion10 = htmlspecialchars($_POST["question10"]);
  }
  else {
    echo "<p>You did not enter a valid input for question 10.</p>";
    $fquestion10 = "none";
  }

  if(isset($_POST["question11"])) {
    $fquestion11 = htmlspecialchars($_POST["question11"]);
  }
  else {
    echo "<p>You did not enter a valid input for question 11.</p>";
    $fquestion11 = "none";
  }

  if(isset($_POST["question12"])) {
    $fquestion12 = htmlspecialchars($_POST["question12"]);
  }
  else {
    echo "<p>You did not enter a valid input for question 12.</p>";
    $fquestion12 = "none";
  }

  $inputlist = array($fquestion1, $fquestion2, $fquestion3, $fquestion4, $fquestion5,
                      $fquestion6, $fquestion7, $fquestion8, $fquestion9, $fquestion10,
                      $fquestion11, $fquestion12);

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
        echo "<h1>You may relate to \"Scott Street\".</h1>";
        echo "<audio controls autoplay>
          <source src=\"scottstreet.mp3\" type=\"audio/mp3\">
          Your browser does not support the audio element.
        </audio>";
        echo "<p>Listen to the song lyrics closely, and look for ways you may relate. Good luck!</p>";
  }

  elseif ($kyotocount >= $scottstreetcount && $kyotocount >= $saviorcomplexcount && $kyotocount >=
          $iknowtheendcount && $kyotocount >= $killercount) {
            echo "<h1>You may relate to \"Kyoto\".</h1>";
            echo "<audio controls autoplay>
              <source src=\"kyoto.mp3\" type=\"audio/mp3\">
              Your browser does not support the audio element.
            </audio>";
            echo "<p>Listen to the song lyrics closely, and look for ways you may relate. Good luck!</p>";
          }

  elseif ($saviorcomplexcount >= $scottstreetcount && $saviorcomplexcount >= $kyotocount && $saviorcomplexcount >=
          $iknowtheendcount && $saviorcomplexcount >= $killercount) {
            echo "<h1>You may relate to \"Savior Complex\".</h1>";
            echo "<audio controls autoplay>
              <source src=\"saviorcomplex.mp3\" type=\"audio/mp3\">
              Your browser does not support the audio element.
            </audio>";
            echo "<p>Listen to the song lyrics closely, and look for ways you may relate. Good luck!</p>";
          }
  elseif ($iknowtheendcount >= $scottstreetcount && $iknowtheendcount >= $kyotocount && $iknowtheendcount >=
          $saviorcomplexcount && $iknowtheendcount >= $killercount) {
            echo "<h1>You may relate to \"I Know The End\".</h1>";
            echo "<audio controls autoplay>
              <source src=\"iknowtheend.mp3\" type=\"audio/mp3\">
              Your browser does not support the audio element.
            </audio>";
            echo "<p>Listen to the song lyrics closely, and look for ways you may relate. Good luck!</p>";
          }
  elseif ($$killercount >= $scottstreetcount && $killercount >= $kyotocount && $killercount >=
          $saviorcomplexcount && $killercount >= $iknowtheendcount) {
            echo "<h1>You may relate to \"Killer\".</h1>";
            echo "<audio controls autoplay>
              <source src=\"iknowtheend.mp3\" type=\"audio/mp3\">
              Your browser does not support the audio element.
            </audio>";
            echo "<p>Listen to the song lyrics closely, and look for ways you may relate. Good luck!</p>";
          }

  elseif ($scottstreetcount + $kyotocount + $saviorcomplexcount + $iknowtheendcount + $killercount < 12) {
    echo "<h1>Your song reccomendation is undetermined.</h1>";
    echo "<p>Result could not be determined. You did not fill out all of the form test questions.</p>";
  }

  echo "<br><h2>User Biographical Data</h2>";

  echo "<ul>";

  if ($ffirstname == "medina" || "MEDINA" || "Medina") {
    echo "<li><p>Your name is {$ffirstname} {$flastname}. You're pretty ok, ig. Anyways, medinosaur, do you remember table noodle?</p></li>";
  }

  elseif ($ffirstname == "karl" || "KARL" || "Karl") {
    echo "<li><p>Your name is {$ffirstname} {$flastname}. Karl Marx?!? Taking my quiz ?!?? I am truly baffled.</p></li>";
  }

  elseif ($ffirstname == "miranda" || "MIRANDA" || "Miranda") {
    echo "<li><p>Your name is {$ffirstname} {$flastname}. I hope that you're having a nice day as the Queen of the TA's!</p></li>";
  }

  elseif ($ffirstname == "hari" || "HARI" || "Hari" || "haripooper") {
    echo "<li><p>Your name is {$ffirstname} {$flastname}. I hope that this very secret php message finds you well! Also isn't this cool enough to warrant an A?";
  }

  elseif ($ffirstname == "dev" || "Dev" || "DEV" || "Samuel" || "samuel" || "SAMUEL"|| "sam" || "Sam" || "SAM") {
    echo "<li><p>Your name is {$ffirstname} {$flastname}. I hope that this very secret php message finds you well! Also isn't this cool enough to warrant an A?";
  }

  else {
    echo "<li><p>Your name is {$ffirstname} {$flastname}.</p></li>";
  }

  echo "<li>Your pronouns are: </li>";

  for ($i = 0; $i < count($fpronouns); $i++) {
      echo "<p>- {$fpronouns[$i]}</p>";
  }
  if (count($fpronouns) == 0) {
    echo "<p>- They/them (You didn't enter a valid pronoun input)</p>";
  }
  echo "<li><p>Your birthday is {$fbirthday}.</p></li>";
  echo "<li><p>Your email is {$femail}.</p></li>";
  echo "<li><p>Your phone number is {$fphone}.</p></li>";
  echo "<li><p>You have {$ffingers} fingers.</p></li>";
  echo "<li><p>Your favorite color (in rgb) is {$ffavcolor}.</p></li><br>";

  echo "<button onclick =\"window.location.href='testquestions.php'\">Retake Quiz</button>";

  echo " ";

  echo "<button onclick =\"window.location.href='https://validator.w3.org/nu/#textarea'\">HTML5</button>";

  echo "</ul><br><br>";

  echo "</div>";

  echo "</div>";

 ?>
