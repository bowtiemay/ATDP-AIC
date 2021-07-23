<?php

  session_start();

    if (isset($_SESSION['playerID'])) {
      header("Location: https://atdpsites.berkeley.edu/mcobb/X11/game.php");
      exit();
    }

?>

<html>
<head><title>Parkamon</title>
<link href="x10.css" rel="stylesheet" type="text/css" />
</head>

</html>

<?php
  require_once 'config.php';

  try {

    echo "<h1>Parkamon Log In</h1>";

    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    $sth = $dbh->prepare("SELECT * FROM player");

    $sth->execute();

    $var = $sth->fetchAll();

    echo "<h3>Player Name:</h3>";

    echo "<form action = \"game.php\" method=\"post\">";

    echo "<select name=\"player\">"; // list box

    foreach ($var as $row){
      echo "<option value=\"".$row['id']."\">".$row['name']."</option>";
    }

    echo "</select>";

    //password validation

    echo "<h3>Password:</h3>";

    echo "<input type=\"text\" id=\"password\" name=\"password\" maxlength=\"8\">";

    echo "<br><br><br>";

    echo "<input type=\"submit\" name=\"login\" value=\"Log in!\">";

    if (isset($_SESSION['error'])) {
      echo "{$_SESSION['error']}";
    }

    echo "</form>";

    unset($_SESSION['error']);

  }

  catch (PDOException $e) {
      echo "<p>Error: {$e->getMessage()}</p>";
  }

 ?>
