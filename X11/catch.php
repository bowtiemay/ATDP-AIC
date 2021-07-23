<?php

  session_start();

?>

<html>
<head><title>Parkamon</title></head>
</html>

<?php

  try {

    if (!isset($_SESSION['playerID'])) {
      if (!isset($_POST['player'])) {
        header("Location: https://atdpsites.berkeley.edu/mcobb/X11/signin.php");
        exit();
      }
    }

    if (!isset($_POST['catch'])) {
      header("Location: https://atdpsites.berkeley.edu/mcobb/X11/game.php");
      exit();
    }

    require_once 'config.php';
    //require_once 'game.php';

    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    //$parkamonList


    if (isset($_SESSION['playerID'])) {
      $player = $_SESSION['playerID'];
    }
    else {
      $player = '[not set]';
      echo "Session playerID is not set.";
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
