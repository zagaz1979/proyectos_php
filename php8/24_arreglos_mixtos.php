<?php

    // Arreglos mixtos
    /*
    Los arreglos mixtos básicamente tienen índices y llaves
    */

    $arregloMixto = [
        "curso" => "Php8",
        0 => "Facultad Autodidacta",
        "tipo" => "Backend",
        1 => "Programación Web"
    ];

    // Acceder
    echo $arregloMixto["curso"];
    echo "<br>";
    echo $arregloMixto[1];

?>