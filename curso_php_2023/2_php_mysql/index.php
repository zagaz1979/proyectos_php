<?php require "./inc/session_start.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "./inc/head.php"; ?>
</head>
<body>
    <?php 

        if (!isset($_GET['vista']) || $_GET['vista'] == "" ) {
            $_GET['vista'] = "login";
        }
        
        if (is_file("./vistas/".$_GET['vista'].".php") && $_GET['vista'] != "" && $_GET['vista'] != "404" ) {            
            
            /*
            # Cerrar la sesion
            if ( (!isset($_SESSION['id']) || $_SESSION['id'] == "") || (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == "") ) {
                include "./vistas/logout.php";
                //echo "hola";
            }
            */

            if ( !isset($_SESSION['id']) || $_SESSION['id'] == "" ) {
                if (headers_sent()) {
                    echo "<script> window.location.href='index.php?vista=login'; </script>";
                } else {
                    header("Location: index.php?vista=login");
                }
            }

            
            include "./inc/navbar.php"; 
            include "./vistas/".$_GET['vista'].".php";
            include "./inc/script.php"; 
        } else {
            if ($_GET['vista'] == "login") {
                include "./vistas/login.php";
            } else {
                include "./vistas/404.php";
            }
        }

    ?>
</body>
</html>