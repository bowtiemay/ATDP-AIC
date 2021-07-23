<?php

  session_start();

?>

<html>
<head><title>EarthEbay!</title>
<link href="x10.css" rel="stylesheet" type="text/css" />
</head>

</html>

<?php

  require_once 'config.php';

  try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);


    if (!isset($_SESSION['customerID'])) {
      if (isset($_POST['customerSelect']) && isset($_POST['passwordSelect'])) {

        $sth = $dbh->prepare("SELECT `password_hash` FROM customer WHERE `username` = :username");
        $sth->bindValue(':username', $_POST['customerSelect']);
        $sth->execute();
        $customerPass = $sth->fetch();

        if (password_verify($_POST['passwordSelect'], $customerPass['password_hash'])) {
            $playerID = $_POST['customerSelect'];
            $_SESSION["customerID"] = $_POST['customerSelect'];
        }

        else {
          $_SESSION['error'] = "Incorrect password.";
          header("Location: signin.php");
          exit();
        }

      }

    	else {
        //$_SESSION['error'] = "Incorrect password.";
    		header("Location: signin.php");
        exit();
        //session_destroy();
    	}
    }

    $username = $_SESSION['customerID'];






    $sth1 = $dbh->prepare("SELECT * FROM customer WHERE `username` = :username");
    $sth1->bindValue(':username', $username);
    $sth1->execute();
    $customerName = $sth1->fetch();

    echo "<h1>Earth Ebay!</h1>";

    echo "<h3>You are signed is as {$username}!</h3>";

    $sth2 = $dbh->prepare("SELECT * FROM inventory");
    $sth2->execute();
    $var = $sth2->fetchAll();
    echo "<h3>Choose an item to add to the cart!</h3>";

    echo "<form action = \"add.php\" method=\"post\">";

    echo "<select name=\"item\">"; // list box

//dropdown
    foreach ($var as $row){
      echo "<option value=\"".$row['id']."\">".$row['product_name']."</option>";
    }

    echo "</select>";

    echo "<input type=\"submit\" name=\"addtocart\" value=\"Add to Cart!\">";

    echo "</form>";


    echo "<a href=\"cart.php\">Go to cart!</a>";

    echo "<a href=\"signout.php\">Signout of {$customerName['username']}'s session!</a>";

  }

  catch (PDOException $e) {
      echo "<p>Error: {$e->getMessage()}</p>";
  }

 ?>
