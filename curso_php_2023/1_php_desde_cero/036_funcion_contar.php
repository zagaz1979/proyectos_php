<?php

    $cadena_texto = "Hola mundo";

    // Contar caracteres de una cadena
    $longitud = strlen($cadena_texto);
    //echo $longitud . "<br>";
    echo $cadena_texto . " tiene " . $longitud . " caracteres " .  "<br>";

    // Contar cuantas palabras tiene la cadena
    $palabras = str_word_count($cadena_texto);
    echo $cadena_texto . " tiene " . $palabras . " palabras ". "<br>";


?>