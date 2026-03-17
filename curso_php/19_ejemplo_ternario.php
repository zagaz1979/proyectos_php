<?php

    /* 
    Hacer un programa que calcule el total a pagar por la compra de camisas. 
    Si se compran tres camisas o más se aplica un descuento del 20% 
    sobre el total de la compra y si son menos de tres camisas un descuento del 100%.
    */

    $camisas = 7;
    $precio = 45000;

    $total = $camisas * $precio;

    $total = ($camisas >= 3) ? $total - ($total * 0.20) : $total - ($total * 0.10);

    echo "El total a pagar es: $" . $total;

?>