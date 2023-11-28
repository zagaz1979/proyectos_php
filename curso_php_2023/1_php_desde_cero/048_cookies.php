<?php

    // Forma en que se declara una cookie
    //setcookie(nombre, valor, expiracion, dir, dominio, secure, httponly);

    // cookie con los parametros obligatorios
    //setcookie("Idioma", "es");

    // cookie con expiracion
    // 60 = segundos, 60 = minutos, 24 = horas, 30 = dias, 365 = 1 año
    // esta cookie expirará a los 30 dias 
    //setcookie("Idioma", "es", time() + 60*60*24*30);

    // cookie con directorio 
    // / = en la raiz, /PDO/ en la carpeta PDO estará la cookie
    //setcookie("Idioma", "es", time() + 60*60*24*30, "/");

    // cookie con dominio
    // solamente esta cookie estara disponible en este dominio
    // entonces desde local no podré leerla 
    // para que la lea tenemos que colocar el dominio localhost 
    //setcookie("Idioma", "es", time() + 60*60*24*30, "/", "diseno.com", );
    //setcookie("Idioma", "es", time() + 60*60*24*30, "/", "localhost");

    // cookie con conexion segura
    // se va a crear solamente cuando haya https y se coloca true
    // colocamos false 
    // httponly - puede ser accesible el http
    setcookie("Idioma", "es", time() + 60*60*24*30, "/", "localhost", false, false);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Hola cookies</h1>

    <!-- Leer el valor de una cookie -->
    <h2> <?php echo $_COOKIE['Idioma']; ?> </h2>
</body>
</html>