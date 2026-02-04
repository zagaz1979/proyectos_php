<?php

    // Arreglos
    // Es una estructura de datos que permite almacenar multiples valores
    // y de diferente tipo de datos

    // Arreglos indexados
    $frutas = array("Manzana", "Pera", "Uva");
    echo "<pre>";
    var_dump($frutas);
    echo "</pre>";

    echo "<br>";

    // Sintaxis corta de array
    $colores = ["Rojo", "Negro", "Azul", "Amarillo"];
    echo "<pre>";
    var_dump($colores);
    echo "</pre>";

    // Acceder a los elementos del arreglo
    echo "<br>";
    echo $frutas[1];

    // Agregar un elemento al final del arreglo
    echo "<br>";
    $colores[] = "Gris";
    $colores[1] = "Blanco"; // Modificar elemento del arreglo
    $colores[10] = "Purpura";
    var_dump($colores);


?>