<?php

    // Declarar una constante de forma antigua
    define("NOMBRE", "Juana");
    
    // Declarar una constante de forma actual
    const PI = 3.1416;

    echo NOMBRE;
    echo "<br>";
    echo PI;
    echo "<br>";

    define("ALUMNOS", array("Carlos", "Juana", "Alba"));
    echo ALUMNOS[2];

    const NOTAS = array(4.5, 4.7, 3.7);
