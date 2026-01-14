<?php

    var_dump(1 == "1");
    echo "<br>";

    // el doble igual tiene en cuenta el valor y no el tipo
    $valor_2 = 1;
    var_dump($valor_2 == "1");
    echo "<br>";

    // el triple igual tiene en cuenta el tipo y el valor
    // es identico ===
    $valor_2 = 1;
    var_dump($valor_2 === "1");
    echo "<br>";

    $valor_2 = 7;
    var_dump($valor_2 != "7");
    echo "<br>";

    $valor_2 = 9;
    var_dump($valor_2 <> 7);
    echo "<br>";

    $valor_2 = "Hola";
    var_dump($valor_2 == "hola");
    echo "<br>";

    // no es identico !==
    $valor_2 = 2;
    var_dump($valor_2 !== "2");
    echo "<br>";

    $valor_2 = 2;
    var_dump($valor_2 < 2);
    echo "<br>";

    $valor_2 = 1;
    var_dump($valor_2 <= 2);
    echo "<br>";

    $valor_2 = 2;
    var_dump($valor_2 > 2);
    echo "<br>";

    $valor_2 = 1;
    var_dump($valor_2 >= 2);
    echo "<br>";
