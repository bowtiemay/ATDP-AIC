<html>
<head><title>Parkamon</title>
<link href="x10.css" rel="stylesheet" type="text/css" />
</head>

</html>

<?php
  require_once 'config.php';

  try {

    echo "<h1>Parkamon!</h1>";

    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    $sth = $dbh->prepare("SELECT * FROM player");

    $sth->execute();

    $var = $sth->fetchAll();

    echo "<h3>Catch a parkamon!</h3>";

    echo "<form action = \"catch.php\" method=\"post\">";

    echo "<select name=\"player\">"; // list box

    foreach ($var as $row){
      echo "<option value=\"".$row['id']."\">".$row['name']."</option>";
    }

    echo "</select>";

    echo "<input type=\"submit\" name=\"catch\" value=\"Catch!\">";

    echo "</form>";

    echo "<h3>Your parkamon:</h3>";

    $sth0 = $dbh->prepare("SELECT * FROM ownership INNER JOIN parkamon ON ownership.parkamon_id = parkamon.id INNER JOIN player ON ownership.player_id = player.id ORDER BY name, breed, nickname");
    $sth0->execute();
    $res = $sth0->fetchAll();

    echo "<table>";

    echo "<th><td><strong>Trainer</strong></td><td><strong>Parkamon</strong></td><td><strong>Nickname</strong></td></th>";

    foreach ($res as $row) {
      echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["breed"]. "</td><td>" . $row["nickname"]."</td></tr>";
    }

    echo "</table>";


    echo "<h3>Rename your parkamon!</h3>";

    $sth1 = $dbh->prepare("SELECT * FROM ownership");
    $sth1->execute();
    $res2 = $sth1->fetchAll();

    echo "<form action = \"rename.php\" method=\"post\">";

    echo "<select name = \"changenickname\">";

    foreach ($res2 as $row) {
      echo "<option value =\"" . $row["id"] . "\">" . $row["nickname"]."</option>";
    }

    echo "</select>";

    echo "<input type=\"text\" id=\"name\" name=\"name\" maxlength=\"8\">";

    echo "<input type=\"submit\" name=\"rename\" value=\"Rename!\">";

    echo "</form>";

    ///////////////////////

    echo "<h3>Release a parkamon!</h3>";

    echo "<form action = \"release.php\" method=\"post\">";

    echo "<select name = \"releaseparkamon\">";

    foreach ($res2 as $row) {
      echo "<option value =\"" . $row["id"] . "\">" . $row["nickname"]."</option>";
    }

    echo "</select>";

    echo "<input type=\"submit\" name=\"release\" value=\"Release!\">";

    echo "</form>";

    echo "<br><br>";

  }

  catch (PDOException $e) {
      echo "<p>Error: {$e->getMessage()}</p>";
  }

 ?>
