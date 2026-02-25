<?php

    /*
    1. Calcular el total que una persona debe pagar en una llantera, el precio de 
       cada llanta es de $800 si se compran menos de 5 llantas y de $700 si se compran 5 o más.
    */

    /*   
    $cantidad = 9;

    if ($cantidad < 5) {
        $total = $cantidad * 800;
    } else {
        $total = $cantidad * 700;
    }

    echo "El total a pagar es de $" . $total;
    */

    /*
    2. Determinar si un alumno aprueba o reprueba un curso, sabiendo que aprobara si su 
       promedio de tres calificaciones es mayor o igual a 3.0, reprueba en caso contrario
    */
    
    $nota_1 = 4.5;
    $nota_2 = 3.7;
    $nota_3 = 4.8;

    $promedio = ($nota_1 + $nota_2 + $nota_3) / 3;

    if ($promedio >= 3.0) {
        echo "Estudiante aprobado con calificación: " . $promedio;
    } else {
        echo "Estudiante reprobado con calificación: " . $promedio;
    }

    

?>