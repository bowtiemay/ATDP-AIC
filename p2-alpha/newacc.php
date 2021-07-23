<?php
  session_start();
 ?>

<html>
<head><title>EarthEbay</title></head>
</html

<?php

  require_once 'config.php';

  try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    $username = $_POST['newusername'];
    $password = password_hash($_POST["newpassword"], PASSWORD_DEFAULT);

    // $_SESSION['username'] = $username;
    // $_SESSION['password'] = $password;

    $sth = $dbh->prepare("INSERT INTO customer (`username`, `password_hash`) VALUES (:username, :password)");
    $sth->bindValue(':username', $username);
    $sth->bindValue(':password', $password);
    $newaccount = $sth->execute();

    echo "<p>Successfully created account for {$username}! <a href = \"signin.php\">Back to signin!</a></p>";

  }
  catch (PDOException $e) {
      echo "<p>Error: {$e->getMessage()}</p>";
  }
?>
