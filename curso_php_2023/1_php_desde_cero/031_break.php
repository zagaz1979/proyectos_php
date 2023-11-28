<?php


/*
    $i = 1;
    while ($i <= 20) {
        echo $i . "<br>";

        if ($i == 10) {
            break;
        }

        $i++;
    }
*/

/*
    $pc = ["SO", "SSD", "RAM", "GPU", "CPU"];

    foreach ($pc as $componente) {
        echo $componente . "<br>";
        if ($componente == "RAM") {
            break;
        }
    }
*/

/*
    $pc = ["SO", "SSD", "RAM", "GPU", "CPU"];

    foreach ($pc as $componente) {
        if ($componente == "RAM") {
            continue;
        }
        echo $componente . "<br>";
    }
*/

/*
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            continue;
        }
        echo $i . "<br>";
    }
*/

    $i = 1;
    while ($i <= 10) {
        if ($i == 3) {
            $i++;
            continue;
        }
        echo $i . "<br>";
        $i++;
    }

?>