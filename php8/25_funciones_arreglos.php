<?php

    // Funciones para arreglos
    $numeros = [1,2,3,4,5];

    // Contar elementos de un arreglo
    echo "<h4>Contar elementos de un arreglo</h4>";
    echo count($numeros);

    // Agregar al final de un arreglo
    echo "<h4>Agregar al final de un arreglo</h4>";
    array_push($numeros, 6);
    echo json_encode($numeros); // También podría utilizar var_dump con la etiqueta <pre></pre>

    // Agregar al inicio de un arreglo
    echo "<h4>Agregar al inicio de un arreglo</h4>";
    array_unshift($numeros, 0);
    echo json_encode($numeros); // También podría utilizar var_dump con la etiqueta <pre></pre>

    // Eliminar al final de un arreglo
    echo "<h4>Eliminar al final de un arreglo</h4>";
    $elimino = array_pop($numeros);
    echo $elimino;
    echo "<div>";
    echo json_encode($numeros);
    echo "</div>";

    // Eliminar al inicio de un arreglo
    echo "<h4>Eliminar al inicio de un arreglo</h4>";
    $elInicio = array_shift($numeros);
    echo $elInicio;
    echo "<div>";
    echo json_encode($numeros);
    echo "</div>";

    // Verificar si existe una clave
    echo "<h4>Verificar si existe una clave</h4>";
    $personas = [
        "nombre" => "Roldan",
        "curso" => "php8"
    ];

    if (in_array("Roldan", $personas)) {
        echo "El nombre está en el arreglo";
    }


?>