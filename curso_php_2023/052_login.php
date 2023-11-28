<?php

    if (!preg_match("/^[a-zA-Z]{3,10}$/", $_POST['usuario'])) {
        echo "El usuario no coincide con el formato solicitado";
        exit();
    }

    if (!preg_match("/^[a-zA-Z0-9$@.-]{3,30}$/", $_POST['clave'])) {
        echo "La contraseña no coincide con el formato solicitado";
        exit();
    }

    if ($_POST['usuario'] == "Cesar" && $_POST['clave'] == "12345" ) {

        session_name("LOGIN");
        session_start();
    
        $_SESSION["Nombre"] = "Cesar";
        $_SESSION["Apellido"] = "Garcia";
        $_SESSION["Pais"] = "Colombia";

        
        if (headers_sent()) {
            echo "<script> window.location.href='052_contador.php'; </script>";
        } else {
            header("Location: 052_contador.php");
        }

    } else {
        echo "Datos incorrectos";
    }

?>