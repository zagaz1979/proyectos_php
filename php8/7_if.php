<?php

    /*
    ¿Que es una estructura de control?
    - Es una estructura que nos ayuda con el flujo de ejecución
    - de nuestro código
    */

    // if es una estructura condicional
    // donde si la condición es verdadera, se ejecuta
    /* 
    Su estructura o declaración es:
    if (condicion) {

    }
    */

    if (true) {
        echo "Esta estructura se ejecutó bien";
    }

    echo "<br>";

    // Verificar si un número es mayor que 10
    $numero = 15;
    if ($numero > 10) {
        // Interpolación
        echo "El numero $numero es mayor que 10";
    }

    echo "<br>";

    // Verificar si una variable está definida y no está vacía
    $texto = "Hola que tal";
    if (isset($texto) && !empty($texto)) {
        echo "Texto válido";
    }

    echo "<br>";

    // Verificar si una persona tiene acceso
    $estaRegistrado = true;
    if ($estaRegistrado) {
        echo "Acceso concedido al sistema";
    } 

?>