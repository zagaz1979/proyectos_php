<?php

    //Requiere la clase Empleado
    //require_once("ClassEmpleado.php");
    //require_once("ClassCliente.php");  
    
    require_once("autoload.php");

    //Creamos el objeto con la instancia de la clase
    $objEmpleado = new Empleado(1020, "Andres Pérez", 25);
    $objEmpleado->setMensaje("Bienvenido Empleado");
    $objEmpleado->setPuesto("Administrador");


    //Vamos a mostrar los datos de este empleado
    echo $objEmpleado->getMensaje();
    echo $objEmpleado->getDatosPersonales();
    echo "PUESTO: " . $objEmpleado->getPuesto();


    echo "<br><br><br>";

    //Creamos el objeto con la instancia de la clase
    $objCliente = new Cliente(1030, "Maria Jimenez", 20);
    $objCliente->setCredito(14000);
    $objEmpleado->setMensaje("Bienvenido Cliente");

    //Vamos a mostrar los datos de este empleado
    echo $objEmpleado->getMensaje();
    echo $objCliente->getDatosPersonales();
    echo "CREDITOS: " . $objCliente->getCredito();

?>