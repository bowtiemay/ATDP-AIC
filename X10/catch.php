<html>
<head><title>Parkamon</title></head>
</html>

<?php

  try {

    require_once 'config.php';
    //require_once 'game.php';

    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    //$parkamonList
    //make sure that the id is one of the player ideas

    if (isset($_POST['player'])) {
      $player = $_POST['player'];
    }
    else {
      echo "Invalid player input.";
    }

    $l = $dbh->prepare("SELECT * FROM player ORDER BY id DESC LIMIT 1");

    $l->execute();
    $var = $l->fetch();
    $length = $var['id'];

    if ($length <= 10) {

      $sth1 = $dbh->prepare("SELECT * FROM parkamon ORDER BY RAND() LIMIT 1");
      $sth1->execute();
      $caught = $sth1->fetch();

      $sth2 = $dbh->prepare("SELECT * FROM player WHERE `id` = :id");
      $sth2->bindValue(':id', $player);
      $sth2->execute();
      $chosenPlayer = $sth2->fetch();

      $sth3 = $dbh->prepare("INSERT INTO ownership (`player_id`, `parkamon_id`, `nickname`) VALUES (:player, :parka, 'no name')");
      $sth3->bindValue(':player', $chosenPlayer["id"]);
      $sth3->bindValue(':parka', $caught["id"]);
      $sth3->execute();
      $inserted = $sth3->fetch();

      echo "{$chosenPlayer["name"]} caught {$caught["breed"]}!";

      echo "<br><a href=\"game.php\">Back to the game!</a>";

    }

    else {
      echo "Invalid player ID";
      echo "<br><a href=\"game.php\">Back to the game!</a>";
    }
  }

  catch (PDOException $error) {
    echo "<p>Error</p>";
  }

?>
