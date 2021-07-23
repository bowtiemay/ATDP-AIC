<?php

  session_start();

?>

<html>
<head><title>Add to Cart</title></head>
</html>

<?php

  try {

    if (!isset($_SESSION['customerID'])) {
      if (!isset($_POST['customerSelect'])) {
        header("Location: signin.php");
        exit();
      }
    }

    if (!isset($_POST['item'])) {
      header("Location: home.php");
      exit();
    }

    require_once 'config.php';
    //require_once 'game.php';

    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    //$parkamonList


    if (isset($_SESSION['customerID'])) {
      $customer = $_SESSION['customerID'];
    }
    else {
      $customer = '[not set]';
      echo "Session customer ID is not set.";
    }

    $sth1 = $dbh->prepare("SELECT `cost` FROM inventory WHERE `id` = :id");
    $sth1->bindValue(':id', $_POST['item']);
    $sth1->execute();
    $productPrice = $sth1->fetch();

    //var_dump($productPrice);

    $sth2 = $dbh->prepare("SELECT `product_name` FROM inventory WHERE `id` = :id");
    $sth2->bindValue(':id', $_POST['item']);
    $sth2->execute();
    $productName = $sth2->fetch();


    //$sth3 = $dbh->prepare("INSERT INTO inventory (`product_name`, `cost`, `number_in_stock`) VALUES ('cat', '5', '7')");
    $sth3 = $dbh->prepare("INSERT INTO cart (`product_name`, `product_price`, `user`) VALUES (:product, :price, :user)");
    $sth3->bindValue(':product', $productName['product_name']);
    $sth3->bindValue(':price', $productPrice['cost']);
    $sth3->bindValue(':user', $_SESSION['customerID']);
    $inserted = $sth3->execute();

    //var_dump($inserted);

    echo "{$productName['product_name']} has been added to the cart! ";

    echo "<a href=\"home.php\">Back to the homepage!</a> or <a href=\"cart.php\">Go to my cart!</a>";

  }

  catch (PDOException $error) {
    echo "<p>Error</p>";
  }

?>
