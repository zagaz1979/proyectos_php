<?php

    $valor_1 = 7;
    $valor_2 = 2;

    // Operador y - && - and
    var_dump($valor_1 == 7 && 2 > 3);
    echo "<br>";
    var_dump($valor_1 == 7 and 9 > 3);
    echo "<br>";

    // Operador o - || - or
    var_dump($valor_1 == 7 || 2 > 3);
    echo "<br>";
    var_dump($valor_1 == 7 or 9 > 3);
    echo "<br>";

    // Operador no - ! 
    var_dump(!($valor_1 == 7));
    echo "<br>";

    $resultado = !($valor_1 == 7);
    var_dump($resultado);
    echo "<br>";
