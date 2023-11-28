<?php

    if ($_POST['usuario'] == "Cesar" && $_POST['clave'] == "12345" ) {

        session_name("LOGIN");
        session_start();
    
        $_SESSION["Nombre"] = "Cesar";
        $_SESSION["Apellido"] = "Garcia";
        $_SESSION["Pais"] = "Colombia";

        echo "Sesion iniciada";
    } else {
        echo "Datos incorrectos";
    }

?>