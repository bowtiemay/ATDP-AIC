<?php
require_once 'config.php';

try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    $sth = $dbh->prepare("SELECT * FROM comic ORDER BY comicID ASC"); //never put variables in here
    //$sth->bindValue(':id', $id); //bind is safe!

    $sth->execute();
    $comic1 = $sth->fetchAll(); //stores in associative array

    foreach ($comic1 as $id) {

      //var_dump($id);
      $date1 = new DateTime($id['date']);

      $formattedDate = $date1->format("m-d-Y");

      echo "<br><a href=\"https://atdpsites.berkeley.edu/mcobb/X9/comic.php?id={$id['comicID']}\">Comic {$id['comicID']}</a><br>";
      echo "<p>Comic title: {$id['title']}</p>";
      echo "<p>Comic date: {$formattedDate}</p>";
    }


    //var_dump($comic1);
}

catch (PDOException $e) {
    echo "<p>Error connecting to database!</p>";
    echo "<p>{$e->getMessage()}</p>";
}

?>
