<?php

    require_once("ClassOperacion.php");

    $objRaiz = new Calcular();

    echo $objRaiz->raizCuadrada(9);
    echo "<br>";
    echo $objRaiz->potencia(4,2);
    echo "<br>";
    echo $objRaiz->op_basicas(5,10,"+");

?>