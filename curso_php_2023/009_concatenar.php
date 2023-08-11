<?php

    $nombre = "Cesar";
    $pais = "Colombia";
    $numero = 7;

    // Concatenar
    $resultado = $nombre . " " . $pais . " " . $numero; 
    echo $resultado;
    echo "<br>";
    echo "Mi nombre es: " . $nombre . " Mi pais de residencia es: " . $pais;

    // Interpolacion
    // Esto funciona solamente con comillas dobles
    echo "<br>";
    echo "Mi nombre es: {$nombre} Mi pais de residencia es: $pais";


