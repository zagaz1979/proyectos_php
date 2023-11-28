<?php

    $fecha_1 = "2023/11/17";
    $fecha_2 = "2023-11-17";
    $numeros = "Uno Dos Tres Cuatro Cinco Seis";

    //explode(separador, cadena, limitador);

    // Convertir una cadena a array
    $array_fecha_1 = explode("/", $fecha_1);
    //echo $array_fecha_1[0] . "<br>";
    //echo json_encode($array_fecha_1) . "<br>";

    //echo "<br>";
    //echo "<br>";

    $array_fecha_2 = explode("-", $fecha_2);
    //echo $array_fecha_2[0] . "<br>";
    //echo json_encode($array_fecha_2) . "<br>";

    //echo "<br>";
    //echo "<br>";

    // Limitador a 2 se crean dos valores en el array
    //$array_numeros = explode(" ", $numeros, 2);

    // Todos los valores menos el ultimo
    $array_numeros = explode(" ", $numeros, -1);
    
    //echo $array_numeros[0] . "<br>";
    //echo json_encode($array_numeros) . "<br>";
    //print_r($array_numeros);
    var_dump($array_numeros);

?>