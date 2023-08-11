<?php

    $numero_1 = 5;
    $numero_2 = 2;

    echo "Suma: " . $numero_1 + $numero_2 . "<br>";    
    echo "Resta: " . $numero_1 - $numero_2 . "<br>";
    echo "Multiplicacion: " . $numero_1 * $numero_2 . "<br>";
    echo "Division: " . $numero_1 / $numero_2 . "<br>";
    echo "Potencia: " . $numero_1 ** $numero_2 . "<br>";
    echo "Residuo: " . $numero_1 % $numero_2 . "<br>";
    
    // Gerarquia
    $resultado = 7 - 4 + ($numero_1 * $numero_2) / $numero_2;
    echo $resultado;

