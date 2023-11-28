<?php

    $clave = "HolaMundo123";
    
    /*

    // hash fijos

    echo md5($clave) . "<br>";
    echo sha1($clave) . "<br>";
    echo hash("md5", $clave) . "<br>";

    foreach (hash_algos() as $algoritmos) {
        echo $algoritmos . " - " . hash($algoritmos, $clave) . "<br>";
    }
    */

    // hash variados
    //echo password_hash($clave, PASSWORD_DEFAULT) . "<br>";
    //echo password_hash($clave, PASSWORD_BCRYPT) . "<br>";
    //echo password_hash($clave, PASSWORD_BCRYPT, ["cost" => 11]) . "<br>";

    $clave_procesada = password_hash($clave, PASSWORD_BCRYPT, ["cost" => 11]);

    if (password_verify($clave, $clave_procesada)) {
        echo "Clave correcta";
    } else {
        echo "clave incorrecta";
    }

?>