<?php

    // Que es un arreglo asociativo
    /*
    Utilizan claves o (keys), estas son personalizadas, en lugar de uasr índices 
    */

    // Declaración
    $persona = array(
        "nombre" => "Maria",
        "edad" => 25,
        "ciudad" => "Colombia",
    );

    $producto = [
        "nombre" => "Laptop",
        "precio" => 3500000,
        "marca" => "Dell",
    ];

    // Acceso:
    echo $persona["nombre"];

    // Agregar elemento
    $persona["profesion"] = "Ingeniero de Sistemas";

    echo "<br>";

    echo "<pre>";
    var_dump($persona);
    echo "</pre>";

?>