<?php

    // Si necesitas al menos una iteración segura
    // y después una evaluación, usa do while

    // Validación simple

    do {
        $respuesta = "no";
        echo "¿Continuar? (si/no): $respuesta";
    } while ($respuesta === "si");

    echo "<br>";

    // Iteración garantizada

    $contador = 1;
    do {
        echo "Ejecución #$contador <br>";
        $contador++;
    } while ($contador <= 10);

?>