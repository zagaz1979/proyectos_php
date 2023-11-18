<?php

    $cantidad_1 = 12732.77;
    $cantidad_2 = 1931.81;

    //number_format(cantidad, decimales, separador_decimal, separador_Millar);

    // Redondea el numero dejando solamente la parte entera
    // con separador de millares - notación inglesa
    //echo number_format($cantidad_1);
    //$cantidad_1 = number_format($cantidad_1);
    //echo $cantidad_1;

    // Numero con decimales
    //$cantidad_1 = number_format($cantidad_1, 2);
    //echo $cantidad_1;

    // Numero con decimales y separadores
    //$cantidad_1 = number_format($cantidad_1, 2, ".", ",");
    //echo $cantidad_1;

    // Numero sin decimales y separadores
    $cantidad_1 = number_format($cantidad_1, 0, "", ",");
    echo $cantidad_1;


?>