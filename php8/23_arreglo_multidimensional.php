<?php

    // Arreglo multidimensional
    
    /*
    Es un arreglo que contiene otros arreglos como elementos
    */

    # Arreglo bidimensional
    $estudiantes = [
        ["Juan", 25, "Ingeniero"],
        ["Maria", 25, "Medico"],
        ["José", 30, "Diseñador"],
    ];

    echo $estudiantes[0][0]; // Juan
    echo "<br>";
    echo $estudiantes[1][2]; // Medico

    // Arreglo multimensional asociativo
    $productos = [
        "laptop" => [
            "marca" => "Hp",
            "precio" => 2600000,
            "stock" => 6
        ],
        "mouse" => [
            "marca" => "logitech",
            "precio" => 30000,
            "stock" => 20
        ],
    ];

    // Adquirir el precio de la laptop
    echo "<br>";
    echo $productos["laptop"]["precio"];

?>