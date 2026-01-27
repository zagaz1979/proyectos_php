<?php

    // if else
    // si es verdadero: se ejecuta el if
    // sino es verdadero: se ejecuta el else

    // Verificar si un numero es positivo o negativo
    $numero = -5;
    if ($numero >= 0) {
        echo "El número es positivo o cero y es: $numero";
    } else {
        echo "El número $numero es negativo";
    }

    echo "<br>";
    
    // Verificar su un usuario está logueado
    $usuarioLogueado = false;
    if ($usuarioLogueado) {
        echo "Bienvenido";
    } else {
        echo "Por favor inicia sesión";
    }

?>