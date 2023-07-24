<?php


   class Producto{


       //Definir propiedades
       public $strDescripcion;
       public $fltPrecio;
       protected $intStockMinimo = 10;
       protected $strStatus = "Activo";


       //Definir el constructor
       public function __construct(string $descripcion, float $precio)
       {
           $this->strDescripcion = $descripcion;
           $this->fltPrecio = $precio;
       }


       //Método para la información del producto
       public function getInfoProducto(){
           $arrProducto = array(
               "producto" => $this->strDescripcion,
               "precio" => $this->fltPrecio,
               "stock_minimo" => $this->intStockMinimo,
               "estado" => $this->strStatus
           );
           return $arrProducto;
       }


   }//end class Producto


?>
