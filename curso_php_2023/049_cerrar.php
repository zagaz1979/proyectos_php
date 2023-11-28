<?php

    session_name("LOGIN");
    session_start();

    // Eliminar toda la informacion de sesion
    session_destroy();

    // Eliminar las variables de sesion
    //session_unset();

    // Eliminar una variable de sesion
    //unset($_SESSION['Nombre']);

?>