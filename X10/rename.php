<html>
<head><title>Parkamon</title></head>
</html>

<?php

  try {

    require_once 'config.php';
    //require_once 'game.php';

    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    if (isset($_POST['player'])) {
      $player = $_POST['player'];
    }

    if (isset($_POST['name'])) {
      if (strlen($_POST['name']) > 8) {
        $parkamonNickname = "no name";
        echo "<p>Invalid player name length</p>";
      }
      else {
        $parkamonNickname = $_POST['name'];
      }
    }

    if (isset($_POST['changenickname'])) {
      $ownershipID = $_POST['changenickname'];
    }

    $sth2 = $dbh->prepare("UPDATE ownership SET nickname=:name WHERE ownership.id = :id");
    $sth2->bindValue(':name', $parkamonNickname);
    $sth2->bindValue(':id', $ownershipID);
    $caught = $sth2->execute();

    var_dump($parkamonNickname);

    echo "<p>A parkamon has been renamed.</p>";

    echo "<br><a href=\"game.php\">Back to the game!</a>";

  }

  catch (PDOException $error) {
    echo "<p>Error</p>";
  }

?>
