<html>
<head><title>Parkamon</title></head>
</html>

<?php

  try {

    require_once 'config.php';
    //require_once 'game.php';

    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    if (isset($_POST['releaseparkamon'])) {
      $ownershipID = $_POST['releaseparkamon'];
    }

    $sth2 = $dbh->prepare("DELETE FROM ownership WHERE ownership.id = :id");
    $sth2->bindValue(':id', $ownershipID);
    $caught = $sth2->execute();

    echo "<p>A parkamon has been released.</p>";

    echo "<br><a href=\"game.php\">Back to the game!</a>";

  }

  catch (PDOException $error) {
    echo "<p>Error</p>";
  }

?>
