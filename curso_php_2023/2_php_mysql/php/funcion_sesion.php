<?php

function verificar_sesion() {
    session_name("IV");
    session_start();

    /*
    if (!isset($_SESSION['id']) || empty($_SESSION['id']) || !isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) {
        if (headers_sent()) {
            echo "<script> window.location.href='index.php?vista=login'; </script>";
        } else {
            header("Location: index.php?vista=login");
        }
        exit;
    }
    */
}

?>