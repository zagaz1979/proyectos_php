<?php

    //Requerir el archivo de la clase
    require_once('ClassUsuario.php');

    //Crear nuestro primer objeto
    $objUsuarioUno = new Usuario("Andres Cardona", "andres@info.com", "Admin");
    
    //utilizando un método getter para acceder a una propiedad privada
    echo $objUsuarioUno->getPerfil();  

?>