<?php

    //Requerimos el archivo de la clase
    require_once("ClassOperacion.php");  

    //Creamos un objeto con una instancia de la clase ClassOperacion
    $operacion1 = new Operacion(10,7);
    $operacion2 = new Operacion(10,5);

    //Utilizamos un metodos
    $totalSuma = $operacion1->getSuma();
    //Visualizar en pantalla el resultado
    echo "Total Suma:" . $totalSuma;
    echo "<br>";

    $totalResta = $operacion1->getResta();
    //Visualizar en pantalla el resultado
    echo "Total Resta:" . $totalResta;
    echo "<br>";

    $totalMultiplicacion = $operacion1->getMultiplicacion();
    //Visualizar en pantalla el resultado
    echo "Total Multiplicación:" . $totalMultiplicacion;
    echo "<br>";

    $totalDivision = $operacion1->getDivision();
    //Visualizar en pantalla el resultado
    echo "Total División:" . $totalDivision;
    echo "<br>";
    echo "<br>";
    echo "<br>";

    //Utilizamos un metodos
    $totalSuma2 = $operacion2->getSuma();
    //Visualizar en pantalla el resultado
    echo "Total Suma:" . $totalSuma2;
    echo "<br>";

    $totalResta2 = $operacion2->getResta();
    //Visualizar en pantalla el resultado
    echo "Total Resta:" . $totalResta2;
    echo "<br>";

    $totalMultiplicacion2 = $operacion2->getMultiplicacion();
    //Visualizar en pantalla el resultado
    echo "Total Multiplicación:" . $totalMultiplicacion2;
    echo "<br>";

    $totalDivision2 = $operacion2->getDivision();
    //Visualizar en pantalla el resultado
    echo "Total División:" . $totalDivision2;
    echo "<br>";

?>