<?php

    //Requerir el archivo de la clase
    require_once('ClassUsuario.php');

    //Crear nuestro primer objeto
    $objUsuarioUno = new Usuario("Andres Cardona", "andres@info.com", "Admin");
    $objAndrea = new Usuario("Andrea Arana", "andrea@info.com", "Cliente");
    
    //utilizando un método getter para acceder a una propiedad privada
    echo $objUsuarioUno->getPerfil();  
    echo "<br>";
    echo "<br>";
    echo $objAndrea->getPerfil();  
    $objAndrea->setCambiarClave("123456");

    echo "<br>";
    echo "<br>";
    echo $objAndrea->getPerfil();  

?>