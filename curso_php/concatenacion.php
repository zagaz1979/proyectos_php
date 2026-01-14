<?php

    $nombre = "Carlos";
    $pais = "El Salvador";
    $numero = 7;

    // Concatenación
    $resultado = $nombre . " " . $pais . " " . $numero;

    //echo $nombre . " " . $pais;
    echo $resultado;
    echo "<br>";

    // Concatenación
    echo "Mi nombre es: " . $nombre . " y mi pais de residencia es: " . $pais;
    echo "<br>";

    // Interpolación
    echo "Mi nombre es: {$nombre} y mi pais de residencia es: $pais";