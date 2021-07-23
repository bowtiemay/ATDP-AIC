<?php
require_once 'config.php';

try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    $l = $dbh->prepare("SELECT * FROM comic ORDER BY comicID DESC LIMIT 1");
    //here

    $l->execute();
    $var = $l->fetch();
    $length = $var['comicID'];

    if (!isset($_GET['id'])) {
      $sth = $dbh->prepare("SELECT * FROM comic ORDER BY comicID DESC LIMIT 1");
    }
    elseif ($_GET['id'] < 1 || $_GET['id'] > $length || !(filter_var($_GET['id'], FILTER_VALIDATE_INT))) {
      $sth = $dbh->prepare("SELECT * FROM comic ORDER BY comicID DESC LIMIT 1");
      echo "<p>ID is not valid. Please change your id for this page to continue.</p>";
    }
    else {
      $id = $_GET['id'];
      $sth = $dbh->prepare("SELECT * FROM comic WHERE comicID = :id"); //never put variables in here
      $sth->bindValue(':id', $id); //bind is safe!
    }

    $sth->execute();
    $comic1 = $sth->fetch(); //stores in associative array

    $date1 = new DateTime($comic1['date']);

    $formattedDate = $date1->format("m-d-Y");

    echo "<h1>X9: The Chalkboard Manifesto</h1>";

    echo "<h2>Comics</h2>";
    echo "<p>Comic title: {$comic1['title']}</p>";
    echo "<p>Comic image: <br><br><img src = \"http://chalkboardmanifesto.com/{$comic1["fileName"]}\"\"/></p>";
    echo "<p>Comic date: {$formattedDate}</p>";

    $id = $comic1['comicID'];
    //$id = $length;
    $id = $id-1;
    echo "<br><a href=\"https://atdpsites.berkeley.edu/mcobb/X9/comic.php?id={$id}\">Previous</a>";
    $id = $id+2;
    //$sth->bindValue(':id', $id); //bind is safe!
    echo "<br><br><a href=\"https://atdpsites.berkeley.edu/mcobb/X9/comic.php?id={$id}\">Next</a>";
    $id = 1;
    echo "<br><br><a href=\"https://atdpsites.berkeley.edu/mcobb/X9/comic.php?id={$id}\">First</a>";
    $id = $length;
    echo "<br><br><a href=\"https://atdpsites.berkeley.edu/mcobb/X9/comic.php?id={$id}\">Last</a><br><br>";

    //var_dump($comic1);
}

catch (PDOException $e) {
    echo "<p>Error connecting to database!</p>";
    echo "<p>{$e->getMessage()}</p>";
}

?>
