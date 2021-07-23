<?php

    $animals = ["Dog", "Tiger", "Bear", "Penguin"];

    array_splice($animals, 2, 1);

    echo "Animals:";

    echo "<ul>";

    for($i = 0; $i < count($animals); $i++) {
        echo "<li> {$animals[$i]} </li>";
    }

    echo "</ul>";

    echo "Movies:";

    echo "<ol>";

    $movies = ["Indiana Jones", "Star Wars", "Oceean's Eleven"];

    $movies[] = "Up";

    for($i = 0; $i < count($movies); $i++) {
        echo "<li> {$movies[$i]} </li>";
    }

    echo "</ol>";

    echo "Books:";

    echo "<form>";

    $books = ["Sapiens", "Being Mortal", "A song of ice and fire"];

    for($i = 0; $i < count($books); $i++) {
        echo "<input type=\"radio\" id=\"{$books[$i]}\" name=\"fav_book\" value=\"{$books[$i]}\">";
        echo "<label for=\"{$books[$i]}\">{$books[$i]}</label><br>";
    }

    echo "</form>";

    echo "<table>";

    echo "<caption>Pasta Table</caption>";

    echo "<tr>";

    $pasta = ["spagetti", "rigatoni", "macaroni"];

    for($i = 0; $i < count($pasta); $i++) {
        echo "<td> {$pasta[$i]} </td>";
    }

    echo "</tr>";

    echo "</table>";

    ?>

    <html>
      <head>
        <style>
        tr, td, table {
          border: 5px solid purple;
        }
        </style>
      </head>
    </html>
