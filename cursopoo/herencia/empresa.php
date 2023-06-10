<?php

    //Requiere la clase Empleado
    require_once("ClassEmpleado.php");
    require_once("ClassCliente.php");

    //Creamos el objeto con la instancia de la clase
    $objEmpleado = new Empleado(1020, "Andres Pérez", 25);
    $objEmpleado->setPuesto("Administrador");

    //Vamos a mostrar los datos de este empleado
    echo $objEmpleado->getDatosPersonales();
    echo "PUESTO: " . $objEmpleado->getPuesto();


    //Creamos el objeto con la instancia de la clase
    $objCliente = new Cliente(1030, "Maria Jimenez", 20);
    $objCliente->setCredito(14000);

    //Vamos a mostrar los datos de este empleado
    echo $objCliente->getDatosPersonales();
    echo "CREDITOS: " . $objCliente->getCredito();
    

?>