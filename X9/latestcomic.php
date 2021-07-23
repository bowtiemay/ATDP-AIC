<?php
require_once 'config.php';

try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    //$date = new DateTime("2019-08-20"); //can use $_GET here
    $sth = $dbh->prepare("SELECT * FROM comic ORDER BY comicID DESC LIMIT 1"); //never put variables in here, change to id later

    //$sth->bindValue(':day', $day); //bind is safe!
    $sth->execute();
    $comic1 = $sth->fetch(); //stores in associative array

    $date1 = new DateTime($comic1['date']);

    $formattedDate = $date1->format("m-d-Y");

    echo "<h1>First query</h1>";

    echo "<h2>Comics</h2>";
    echo "<p>Comic title: {$comic1['title']}</p>";
    echo "<p>Comic image: <br><br><img src = \"http://chalkboardmanifesto.com/{$comic1["fileName"]}\"\"/></p>";
    echo "<p>Comic date: {$formattedDate}</p>";
    var_dump($comic1);
}

catch (PDOException $e) {
    echo "<p>Error connecting to database!</p>";
    echo "<p>{$e->getMessage()}</p>";
}

?>
