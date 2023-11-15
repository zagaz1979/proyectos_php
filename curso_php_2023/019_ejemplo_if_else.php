<?php

    /* 
    Ejercicios (IF - ELSE)
    
    1. Calcular el total que una persona debe pagar en una llantera, 
       el precio de cada llanta es de $800 si se compran menos de 5 
       llantas y de $700 si se compran 5 o más.
    */

    /*
    $cantidad = 9;

    if ($cantidad < 5 ) {
        $total = $cantidad * 800;
    } else {
        $total = $cantidad * 700;
    }

    echo "El total a pagar es $" . $total;
    */

    /*
    $cantidad = 9;

    if ($cantidad < 5 ):
        $total = $cantidad * 800;
    else:
        $total = $cantidad * 700;
    endif;

    echo "El total a pagar es $" . $total;
    */

    /*
    2. Determinar si un alumno aprueba o reprueba un curso, sabiendo 
       que aprobara si su promedio de tres calificaciones es mayor o 
       igual a 3.0, reprueba en caso contrario   

    */

    $calificacion_1 = 7;
    $calificacion_2 = 8;
    $calificacion_3 = 10;

    $promedio = ($calificacion_1 + $calificacion_2 + $calificacion_3) / 3;

    /*
    if ($promedio >= 3) {
        echo "El alumno aprobo con calificacion de " . round($promedio, 2);
    } else {
        echo "El alumno reprobo con calificacion de " . $promedio;
    }
    */

    if ($promedio >= 3):
        echo "El alumno aprobo con calificacion de " . round($promedio, 2);
    else:
        echo "El alumno reprobo con calificacion de " . $promedio;
    endif;

?>