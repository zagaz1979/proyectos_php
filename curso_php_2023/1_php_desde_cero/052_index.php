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

    <form action="052_login.php" method="POST">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" pattern="[a-zA-Z]{3,10}" maxlength="10">
        <br>
        <label for="usuario">Clave</label>
        <input type="password" name="clave" id="clave" pattern="[a-zA-Z0-9$@.-]{3,30}" maxlength="30">
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>