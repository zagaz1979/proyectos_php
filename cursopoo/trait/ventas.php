<?php

    require_once("ClassTienda.php");

    $objProducto = new Tienda();

    $strProducto = "Teclado";
    $fltPrecio = 110;
    $inStock = 15;

    $intCantidadVendida = 3;

    $objProducto->setProducto($strProducto, $fltPrecio, $inStock);
    echo $objProducto->getProducto();

    $objProducto->setCarrito($strProducto, $intCantidadVendida);
    $objProducto->setStock(2);

    echo $objProducto->getProducto();

    echo $objProducto->getCarrito();


?>