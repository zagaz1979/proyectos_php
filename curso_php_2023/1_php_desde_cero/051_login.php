<?php

    if ($_POST['usuario'] == "Cesar" && $_POST['clave'] == "12345" ) {

        session_name("LOGIN");
        session_start();
    
        $_SESSION["Nombre"] = "Cesar";
        $_SESSION["Apellido"] = "Garcia";
        $_SESSION["Pais"] = "Colombia";

        
        if (headers_sent()) {
            echo "<script> window.location.href='051_contador.php'; </script>";
        } else {
            header("Location: 051_contador.php");
        }

    } else {
        echo "Datos incorrectos";
    }

?>