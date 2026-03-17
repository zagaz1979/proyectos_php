<?php

    /* 
    1. Diseñe un programa que imprima los números del 1 hasta el 20. (Incremento y decremento)
    */

    // Con incremento
    /*
    $c = 1;

    while ($c <= 20) {
        echo $c . "<br>";
        $c++;
    }
    */    

    // Con decremento
    /*
    $c = 20;

    while ($c >= 1) {
        echo $c . "<br>";
        $c--;
    }
    */    


    /*
    2. Diseñe un programa que imprima la tabla de multiplicar de un número dado, desde 
       el factor 1 hasta el 12. (Incremento y decremento)
    */
    

    // Con incremento
    /*
    $num = 7;
    $c = 1;

    while ($c <= 12) {
        echo $num . " x " . $c . " = " . $num * $c . "<br>";
        $c++;
    }
    */    

    $num = 7;
    $c = 12;

    while ($c >= 1) {
        echo $num . " x " . $c . " = " . $num * $c . "<br>";
        $c--;
    }

?>