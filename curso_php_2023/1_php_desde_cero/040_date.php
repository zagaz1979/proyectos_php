<?php

    // Zona horaria para colombia
    date_default_timezone_set("America/Bogota");

    // Fecha dia(d) - mes(m) - año(Y)
    //$fecha = date("d-m-Y");
    //echo "La fecha en colombia es: $fecha" . "<br>";

    // hora(H): minutos(i): segundos(s)
    //$hora_actual = date('H:i:s');
    //echo "La hora actual en Colombia es: $hora_actual" . "<br>";


    // fecha us
    $fecha_us = date("Y-m-d");
    $fecha_es = date("d-m-Y");
    $fecha_us_com = date("l d F Y");

    echo $fecha_us . "<br>";
    echo $fecha_es . "<br>";
    echo $fecha_us_com . "<br>";

    $hora_12 = date("h:i:s a");
    $hora_24 = date("H:i:s");
    echo $hora_12 . "<br>";
    echo $hora_24 . "<br>";

    //$fecha_completa = date("d-m-Y h:i:s A");
    $fecha_completa = date("l d F Y h:i:s A");
    echo $fecha_completa . "<br>";

?>