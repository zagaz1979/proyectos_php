<?php

    /*
    $laptop = ["Lenovo", "Linux Debian", "i3", "8GB RAM", "SSD 256"];

    $frutas = [
        "Fresas" => 10,
        "Mangos" => 5,
        "Peras" => 15,
        "Manzanas" => 25,
        "Melocotones" => 12
    ];
    */

    // Recorrer el valor del array
    /*
    foreach ($laptop as $valor) {
        echo $valor . "<br>";
    }
    */    

    // Recorrer la clave y el valor del array
    /*
    foreach ($frutas as $clave => $valor) {
        echo "Hay $valor $frutas en el inventario <br>";
    }
    */

    $productos = [
        ["codigo" => "A0001", "descripcion" => "Mouse"],
        ["codigo" => "A0002", "descripcion" => "Teclado"],
        ["codigo" => "A0003", "descripcion" => "Monitor"],
        ["codigo" => "A0004", "descripcion" => "Impresora"]
    ];

    foreach ($productos as $producto) {
        echo $producto['codigo'] . " - " . $producto['descripcion'] . "<br>";
    }

?>