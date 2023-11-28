<?php

    $texto = "Jesucristo el salvador";

    // Asignacion normal
    $variable_1 = $texto;

    // Asignacion por referencia
    $variable_2 = &$texto;

    //echo $variable_1;
    //echo "<br>";
    //echo $variable_2;

    // Me muestra siempre Jesucristo el salvador
    //echo $variable_1;
    //echo "<br>";
    //$texto = "Jesucristo es el camino y la vida y la verdad";
    //echo $variable_1;

    // Me muestra siempre Jesucristo el salvador
    echo $variable_2;
    echo "<br>";
    $texto = "Jesucristo es el camino y la vida y la verdad";
    echo $variable_2;