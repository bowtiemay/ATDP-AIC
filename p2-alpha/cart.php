<?php
  session_start();
 ?>


<html>
<head>
<title>Earth Ebay</title>
<link href="x10.css" rel="stylesheet" type="text/css" />
</head>
</html>

<?php

  require 'config.php';

  $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

  if (!isset($_SESSION['customerID'])) {
    if (!isset($_POST['customerSelect'])) {
      header("Location: signin.php");
      exit();
    }
  }

  echo "<h2>Cart:</h2>";

  $sth0 = $dbh->prepare("SELECT * FROM cart  WHERE `user` = :user");
  $sth0->bindValue(':user', $_SESSION['customerID']);
  $sth0->execute();
  $res = $sth0->fetchAll();
  //var_dump($res);

  echo "<table>";

  echo "<th><strong>Item</strong></th><th><strong>Price</strong></th>";

  foreach ($res as $row) {
    echo "<tr><td>" . $row["product_name"]. "</td><td>" . $row["product_price"]. "</td></tr>";
  }

  echo "</table>";

  //cart subtotal

  

  //////////

  $sth1 = $dbh->prepare("SELECT * FROM cart where `user` = :user");
  $sth1->bindValue(':user', $_SESSION['customerID']);
  $sth1->execute();
  $res1 = $sth1->fetchAll();

  //var_dump($res1);

  echo "<form action =\"remove.php\" method = \"post\">";

  echo "<h3>Remove items from your cart!</h3>";

  echo "<select name = \"removeItem\">";

  foreach ($res1 as $row) {
    echo "<option value=\"".$row['id']."\">".$row['product_name']."</option>";
  }

  echo "</select>";

  echo"<input type=\"submit\" name=\"submit\" value=\"Remove from cart\"/>";

  echo "</form>";

  echo "<a href=\"home.php\">Back to the homepage!</a>";

 ?>
