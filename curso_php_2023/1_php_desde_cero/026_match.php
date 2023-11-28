<?php

    $edad = 18;

    $resultado = match(true) {
        $edad >= 60 => "Eres de la tercera edad",
        $edad >= 30 => "Eres adulto",
        $edad >= 18 => "Eres adulto joven",
        default => "Eres un niños"
    };

    echo $resultado;

/* 
    $a = 9;

    $x = 10;
    $y = 9;
    $z = 7;

    $resultado = match($a) {
        $x, $y => "Valor igual a x o y",
        $z => "Valor igual a z",
        default => "No coincide con ningún valor"
    };

    echo $resultado;

 */
    /*
    $a = 7;

    $x = 10;
    $y = 9;
    $z = 7;

    $resultado = match($a) {
        $x => "Valor igual a x",
        $y => "Valor igual a y",
        $z => "Valor igual a z",
        default => "No coincide con ningún valor"
    };

    echo $resultado;
    */

?>