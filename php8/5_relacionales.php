<?php

    $numero1 = 10;
    $numero2 = 3;

    echo "Operador igual: --> "; 
    var_dump($numero1 == $numero2);
    echo "<br>";

    echo "Operador identico: --> "; 
    var_dump($numero1 === $numero2);
    echo "<br>";

    echo "Operador distinto: --> ";
    var_dump($numero1 != $numero2);
    echo "<br>";

    echo "Operador distinto: --> ";
    var_dump($numero1 !== $numero2);
    echo "<br>";

    echo "Operador menor que: --> ";
    var_dump($numero1 < $numero2);
    echo "<br>";

    echo "Operador mayor que: --> ";
    var_dump($numero1 > $numero2);
    echo "<br>";

    echo "Operador menor o igual que: --> ";
    var_dump($numero1 <= $numero2);
    echo "<br>";

    echo "Operador mayor o igual que: --> ";
    var_dump($numero1 >= $numero2);
    echo "<br>";

    echo "Operador nave espacial: --> ";
    var_dump($numero1 <=> $numero2);
    echo "<br>";

?>