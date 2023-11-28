<?php

/* 
    // Funciones normales
    function saludo() {
        echo "Hola mi nombre es carlos";
    }

    saludo();
*/

/* 
    // Funciones con return
    function saludo() {
        return "Hola mi nombre es carlos";
    }

    //$saludar = saludo();
    //echo $saludar;

    echo saludo();
*/

/* 
    // Funciones con parametros
    function saludo($nombre) {
        return "Hola mi nombre es $nombre";
    }

    //$saludar = saludo("Maria");
    //echo $saludar;

    //echo saludo("Marcos");
    echo saludo($nombre = "Marcos");
*/

    function promedio_alumno($nota1, $nota2, $nota3) {
        $promedio = ($nota1 + $nota2 + $nota3) / 3;
        return $promedio;
    }

    /*
    $promedio = promedio_alumno(3, 4, 5);
    echo "El promedio del alumno es: $promedio";
    */

?>