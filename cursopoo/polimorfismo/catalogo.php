<?php

    require_once("ClassMesa.php");


    $objCama = new Producto("Cama", 500000);
    $arrInfoProducto = $objCama->getInfoProducto();

    print_r("<pre>");
    print_r($arrInfoProducto);
    print_r("</pre>");

    ////

    $objMueble = new Mueble("Close", 200000, "Casita", "Cafe", "Madera");
    $arrInfoMueble = $objMueble->getInfoProducto();
 
 
    print_r("<pre>");
    print_r($arrInfoMueble);
    print_r("</pre>");
 
    ////    
 
    $objMesa = new Mesa("Mesa de noche", 800, "Nochesita", "Negro", "Melanina", "3mt");
    $objMesa->setForma("Redonda");
    $arrInfoMesa = $objMesa->getInfoProducto();
 
 
    print_r("<pre>");
    print_r($arrInfoMesa);
    print_r("</pre>");    
   
?>
