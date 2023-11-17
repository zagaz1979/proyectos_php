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

/* 
    foreach($laptop as $valor) {
        echo $valor . "<br>";
    }
*/   

/* 
    foreach($laptop as $clave => $valor) {
        echo $clave . " - " . $valor . "<br>";
    }
*/

/* 
    foreach($frutas as $clave => $valor) {
        echo $clave . " - " . $valor . "<br>";
    }
*/

    $productos = [
        ["codigo" => "A0001", "descripcion" => "Mouse"],
        ["codigo" => "A0002", "descripcion" => "Teclado"],
        ["codigo" => "A0003", "descripcion" => "Monitor"],
        ["codigo" => "A0004", "descripcion" => "Impresora"]
    ];

    foreach ($productos as $valor) {
        echo $valor["codigo"] . "-" . $valor["descripcion"] . "<br>";
    }

?>