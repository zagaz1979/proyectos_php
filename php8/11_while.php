<?php

    // while
    // Es una estructura de control de repetición
    // que se ejecutará mientra su condición sea verdadera

    /* 
    ciclo infinito
    while (true) {
        echo "Hola";
    }
    */

    // Contar números
    $num1 = 1;
    while ($num1 <= 10) {
        echo $num1 . "<br>";
        $num1++; // $num1 = $num1 + 1;
    }

    echo "<hr>";

    // Repetir un mensaje con while
    $veces = 0;
    while ($veces < 4) {
        echo "$veces - Hola que tal" . "<br>";
        $veces++;
    }

?>