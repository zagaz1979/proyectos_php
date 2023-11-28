<?php

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

    <?php echo "Hola " . $_SESSION['Nombre']; ?>

    <br> <br>
    <a href="051_index.php">Inicio</a>
    <a href="051_cerrar.php">Eliminar sesion</a>

</body>
</html>