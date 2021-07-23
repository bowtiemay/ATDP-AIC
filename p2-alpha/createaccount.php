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


    echo "<h2>Create New EarthEbay Account</h2>";

    echo "<form action = \"newacc.php\" method=\"post\">";

    echo "<p>Set a username:</p>";

    echo "<input type=\"text\" name=\"newusername\"/> ";

    echo "<p>Set a password:</p>";

    echo "<input type=\"text\" name=\"newpassword\"/> ";

    echo "<input type=\"submit\" name=\"createaccount\" value=\"Create Account!\">";

    echo "</form>";

  }

  catch (PDOException $e) {
      echo "<p>Error: {$e->getMessage()}</p>";
  }

 ?>
