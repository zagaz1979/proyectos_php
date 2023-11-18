<?php 

    $cadena_texto = "hola mundo";

    //echo strtolower($cadena_texto) . "<br>";
    //echo strtoupper($cadena_texto) . "<br>";

    // strtolower: Convierte a minusculas
    $cadena_texto = strtolower($cadena_texto);
    echo $cadena_texto . "<br>";

    // strtoupper: Convierte a mayusculas
    //$cadena_texto = strtoupper($cadena_texto);
    //echo $cadena_texto . "<br>";

    /*
    strtolower() - Convierte un string a minúsculas
    ucfirst() - Convierte el primer caracter de una cadena a mayúsculas
    ucwords() - Convierte a mayúsculas el primer caracter de cada palabra 
                de una cadena
    mb_strtoupper() - Convierte un string en mayúsculas
    */

    // ucfirst: Convierte la primera letra en mayuscula
    $cadena_texto = ucfirst($cadena_texto);
    echo $cadena_texto . "<br>";

    // ucwords: Convierte la primera letra de cada palabra en mayuscula
    $cadena_texto = ucwords($cadena_texto);
    echo $cadena_texto . "<br>";

?>