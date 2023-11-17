<?php

    /*
    Pida al usuario la edad y el género para que la computadora le indique 
    si ya puede jubilarse. Tome en cuenta que un hombre se puede jubilar 
    cuando tenga 60 años o más, en cambio una mujer mayor se jubila 
    si tiene más de 54 años. 
    */

    $edad = 60;
    $genero = "M";

    if ($genero == "M") {

        if ($edad >= 60) {
            echo "Puede jubilarse";
        } else {
            echo  "No puede jubilarse";
        }

    } elseif ($genero == "F") {

        if ($edad > 54) {
            echo "Puede jubilarse";
        } else {
            echo  "No puede jubilarse";
        }

    } else {
        echo "Coloque una opcion valida";
    }
    

?>