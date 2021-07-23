<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Magic Mixerator Mix Results</title>
</head>
<body>
    <h1>Magic Mixerator Mix Results</h1>
    <?php
    $mixActions = array("shake", "blend", "stir", "boil");

    if (is_int($_POST[beans]) && (is_int($_POST[gems]))) {
      echo "<p>You mixed together {$_POST['beans']} beans</p>";
      echo "<p>and {$_POST['gems']} gems</p>";
      echo "<p>to make ";
      if ($_POST['mixaction'] == "shake") {
        $amount = $_POST['gems'] * $_POST['beans'] - 3;
        echo "${amount} bouncy potions";
      }
      elseif ($_POST['mixaction'] == "blend") {
        $amount = $_POST['gems'] - $_POST['beans'];
        echo "${amount} heaps of healing powder";
      }
      elseif ($_POST['mixaction'] == "stir") {
        $amount = $_POST['gems'] / $_POST['beans'];
        echo "${amount} ounces of strength soup";
      }
      elseif ($_POST['mixaction'] == "boil") {
        $amount = ($_POST['gems'] + $_POST['beans']) * 1000;
        echo "${amount} puffs of monster repellent perfume";
      }
      echo ".</p>";
    }
    elseif (!(is_int($_POST[gems])) && is_int($_POST[beans])) {
      echo "You did not enter an integer for gems";
    }
    elseif (!(is_int($_POST[beans])) && is_int($_POST[gems]) {
      echo "You did not enter an integer for beans";
    }
    else {
      echo "You did not enter an integer for gems and beans";
    }
   ?>
   <p><a href="x5.html">Again!</a></p>
</body>
</html>
