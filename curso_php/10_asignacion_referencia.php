<?php

    $texto = "El Salvador";
    $variable_1 = $texto;
    $variable_2 = &$texto;

    echo $variable_1;
    echo "<br>";
    echo $variable_2;
    echo "<br>";

    $texto = "Carlos Alfaro";

    echo $variable_1;
    echo "<br>";
    echo $variable_2;
    echo "<br>";
    