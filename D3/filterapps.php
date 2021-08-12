<?php


    // ************************************************************************************ //
    // ****************************** SETUP; DO NOT ALTER ********************************* //
    // ************************************************************************************ //

    // provides some functions and variables to get apps and filter them
    require $_SERVER['DOCUMENT_ROOT'] . "/rastley/aicwork/apps/functions.php";

    // loads apps into our $lotsoapps array variable
    // This contains 5000 app records that indicate
    // percentage performance across the following prerequisites:
    // [0] Introduction to Programming
    // [1] The Internet Classroom (Elements of Web Design)
    // [2] Programming in Java
    // [3] Network Security
    // [4] The Advanced Internet Classroom (Web Development)
    // [5] Computer Engineering
    // [6] Overall High School GPA
    $lotsOApps = loadApps();

    //var_dump($lotsOApps);

    // ************************************************************************************ //
    // **************************** YOUR CODE: FILTER APPS ******************************** //
    // ************************************************************************************ //

    // complete this function by implementing an algorithm to take 200 chosen app arrays from
    // $lotsOApps (passed here as a function-scoped parameter) and store them in $filteredApps

    function filterApps($lotsOApps) {

        // initialize an empty filteredApps array to store filtered arrays
        $filteredApps = array();

        for ($i = 0; $i < count($lotsOApps); $i++) {
          for ($j = 0; $j < count($lotsOApps[$i]); $j++) {
            if ($lotsOApps[$i][0] > 70 && $lotsOApps[$i][1] > 70 && $lotsOApps[$i][2] > 70
                && $lotsOApps[$i][3] > 75 && $lotsOApps[$i][4] > 70 && $lotsOApps[$i][5] > 70
                && $lotsOApps[$i][6] > 70) {
              $filteredApps[$i][$j] = $lotsOApps[$i][$j];
            }
          }
        }

        // output the final array of 200 selected finalist apps
        return $filteredApps;
    }



    // ************************************************************************************ //
    // **************************** LET'S SEE THE RESULTS! ******************************** //
    // ************************************************************************************ //

    // list the 200 finalists using your algorithm!
    displayFilteredApps(filterApps($lotsOApps));


?>
