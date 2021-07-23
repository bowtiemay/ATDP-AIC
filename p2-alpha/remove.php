<?php

  session_start();

 ?>


<html>
<head><title>Earth Ebay</title></head>
</html>

<?php

  try {

    if (!isset($_SESSION['customerID'])) {
      if (!isset($_POST['customerSelect'])) {
        header("Location: signin.php");
        exit();
      }
    }

    if (!isset($_POST['removeItem'])) {
      header("Location: home.php");
      exit();
    }

    require_once 'config.php';
    //require_once 'game.php';

    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    // if (isset($_POST['removeItem'])) {
    $removedItem = $_POST['removeItem'];
    // }

    //var_dump($_POST['removeItem']);

    $sth1 = $dbh->prepare("SELECT * FROM customer WHERE `username` = :customerID");
    $sth1->bindValue(':customerID', $_SESSION['customerID']);
    $sth1->execute();
    $username = $sth1->fetch();

    $sth3 = $dbh->prepare("SELECT * FROM cart WHERE `product_name` = :item WHERE 'username' = :username");
    $sth3->bindValue(':username', $username['username']);
    $sth3->bindValue(':item', $removedItem);
    $sth3->execute();
    $item = $sth3->fetch();

    // if ($item['product_name'] != $_SESSION['customerID']) {
    //   echo "That's not your thingamabob. ";
    //   echo "<a href=\"home.php\">Back to the home page!</a>";
    // }
    // else {
    //
      $sth2 = $dbh->prepare("DELETE FROM cart WHERE `id` = :item");
      $sth2->bindValue(':item', $removedItem);
      $caught = $sth2->execute();

      echo "<p>An item has been removed from your cart. <a href=\"cart.php\">Back to the cart! </a><a href=\"home.php\">Back to the homepage!</a></p>";


    //}

  }

  catch (PDOException $error) {
    echo "<p>Error</p>";
  }

?>
