<?php

    // Operador de igualdad == tiene en cuenta el valor mas no el tipo
    $valor_1 = 1;
    var_dump($valor_1 == "1");
    echo "<br>";

    // Operador identico === tiene en cuenta el valor y el tipo
    $valor_1 = 1;
    var_dump($valor_1 === "1");
    echo "<br>";

    // Operador diferente != tiene en cuenta el valor mas no el tipo de datos
    $valor_1 = 1;
    var_dump($valor_1 != "1");
    echo "<br>";

    // Operador diferente <> tiene en cuenta el valor mas no el tipo de datos
    $valor_1 = 1;
    var_dump($valor_1 <> "1");
    echo "<br>";

    // Operador no identico !== tiene en cuenta el valor y el tipo de datos
    $valor_1 = 1;
    var_dump($valor_1 !== "1");
    echo "<br>";

    // Operador Menor que < 
    $valor_1 = 1;
    var_dump($valor_1 < "1");
    echo "<br>";

    // Operador Mayor que > 
    $valor_1 = 1;
    var_dump($valor_1 > "1");
    echo "<br>";

    // Operador Menor o igual que < 
    $valor_1 = 1;
    var_dump($valor_1 <= "1");
    echo "<br>";

    // Operador Mayor o igual que > 
    $valor_1 = 1;
    var_dump($valor_1 >= "1");
    echo "<br>";

