<?php

  session_start();

    if (isset($_SESSION['playerID'])) {
      header("Location: home.php");
      exit();
    }

?>

<html>
<head><title>Earth Ebay</title>
<link href="x10.css" rel="stylesheet" type="text/css" />
</head>

</html>

<?php
  require_once 'config.php';

  try {

    echo "<h1>Earth Ebay Log In</h1>";

    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    $sth = $dbh->prepare("SELECT * FROM customer");

    $sth->execute();

    $var = $sth->fetchAll();

    echo "<h3>Username:</h3>";

    echo "<form action = \"home.php\" method=\"post\">";

    echo "<input type=\"text\" name=\"customerSelect\"/> ";


    //password

    echo "<h3>Password:</h3>";

    echo "<input type=\"text\" name=\"passwordSelect\">";

    echo "<br><br><br>";

    echo "<input type=\"submit\" name=\"login\" value=\"Log in!\">";

    if (isset($_SESSION['error'])) {
      echo "{$_SESSION['error']}";
    }

    echo "</form>";

    unset($_SESSION['error']);

    echo "<a href=\"createaccount.php\">Or create a new  account</a>";

  }

  catch (PDOException $e) {
      echo "<p>Error: {$e->getMessage()}</p>";
  }

 ?>
