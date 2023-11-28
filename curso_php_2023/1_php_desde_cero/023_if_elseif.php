<?php 

    /*
    En una fábrica de computadores se planea ofrecer a los clientes 
    un descuento que dependerá del número de computadoras que compre. 
    Si las computadoras son menos de cinco se les dará un 10% de 
    descuento sobre el total de la compra, si el número de computadoras 
    es mayor o igual a cinco pero menos de diez se le otorga un 20% de 
    descuento, si son 10 o más se les da un 40% de descuento. El precio 
    de cada computadora es de $700.   
    */

    $cantidad = 3;

    $total = $cantidad * 700;

    if ($cantidad < 5) {
        $total = $total - ($total * 0.10);
    } elseif ($cantidad >= 5 && $cantidad < 10) {
        $total = $total - ($total * 0.20);
    } elseif ($cantidad >= 10) {
        $total = $total - ($total * 0.40);
    }

    echo "El total a pagar es $" . $total;

?>