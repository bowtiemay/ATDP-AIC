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

    if (!isset($_POST['changenickname'])){
      if (!isset($_POST['name'])) {
         header('Location: game.php');
         exit();
      }
  }

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

    $sth3 = $dbh->prepare("SELECT * FROM ownership WHERE id = :id");
    $sth3->bindValue(':id', $ownershipID);
    $sth3->execute();
    $idCheck = $sth3->fetch();

    if ($idCheck['playerID'] != $_SESSION['playerID']) {
      echo "That's not your parkamon! ";
      echo "<a href=\"game.php\">Back to the game!</a>";
    }
    else {
      $sth2 = $dbh->prepare("UPDATE ownership SET nickname=:name WHERE ownership.id = :id");
      $sth2->bindValue(':name', $parkamonNickname);
      $sth2->bindValue(':id', $ownershipID);
      $caught = $sth2->execute();

      echo "<p>A parkamon has been renamed.</p>";
      echo "<br><a href=\"game.php\">Back to the game!</a>";
    }


  }

  catch (PDOException $error) {
    echo "<p>Error</p>";
  }

?>
