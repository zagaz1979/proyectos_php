<?php

    $valor_1 = 7;
    $valor_2 = 2;

    // And &&
    var_dump($valor_1 == 7 && 2 > 3);
    echo "<br>";
    var_dump($valor_1 == 7 && 9 > 3);
    echo "<br>";

    // Or ||
    var_dump($valor_1 == 7 || 2 > 3);
    echo "<br>";
    var_dump($valor_1 == 7 || 9 > 3);
    echo "<br>";

    // Not !
    var_dump(!($valor_1 == $valor_2));
    echo "<br>";
