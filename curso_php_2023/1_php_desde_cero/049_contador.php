<?php

/*
    session_name("CON");
    //session_id("PHP");
    session_start();

    if (isset($_SESSION['contador'])) {
        $_SESSION['contador']++;
    } else {
        $_SESSION['contador'] = 1;
    }
*/

    session_name("LOGIN");
    session_start();


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en php</title>
</head>
<body>
    <?php //echo session_id(); ?>

    <?php //echo "Has recargado esta pagina " . $_SESSION['contador'] . " veces"  ?>

    <?php echo "Hola " . $_SESSION['Nombre']; ?>

    <br> <br>
    <a href="049_index.php">Inicio</a>
    <a href="049_cerrar.php">Eliminar sesion</a>

</body>
</html>