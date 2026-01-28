<?php

    // Funciones con valor de retorno
    // Son funciones que retornan un valor
    // facilmente almacenable o para procesar

    function multiplicar($valor1, $valor2) {
        return $valor1 * $valor2;
    }

    /*
    $resultado = multiplicar(4, 5);
    echo "La multiplicación es: $resultado";
    */

    $total = multiplicar(8, 8);
    if ($total < 100) {
        echo "$total es un valor menor a 100";
    } else {
        echo "$total es un valor mayor a 100";
    }

?>