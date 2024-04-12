<?php 
    require "./inc/sesion.php"; 
    //require_once "./php/funcion_sesion.php";
    //verificar_sesion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php 
        include "./inc/head.php"; 
    ?>
</head>
<body>
    <?php 

        if (!isset($_GET['vista']) || $_GET['vista'] == "" ) {
            $_GET['vista'] = "login";
        }
        
        if (is_file("./vistas/".$_GET['vista'].".php") && $_GET['vista'] != "" && $_GET['vista'] != "404" ) {            
            
            /*
            if (!isset($_SESSION['id']) || empty($_SESSION['id']) || !isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) {
                include "./vistas/logout.php";
                exit;
            }
            */
            
                        
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