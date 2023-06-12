<?php


   //Requiere el la clase ClassProducto.php
   require_once("ClassProducto.php");


   //Crear la clase Mueble que hereda de la clase Producto
   class Mueble extends Producto{


        //Definir las propiedades
        public $strColor;
        public $strMaterial;
        public $strStatus = "Agotado";      

        //Definir el método constructor
        public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material){
            //Método constructor de la clase padre Producto
            parent::__construct($descripcion, $precio);

            $this->strMaterial = $material;
            $this->strColor = $color;
        }


        //Método para la información del producto
        public function getInfoProducto(){
            $arrProducto = array(
                "producto" => $this->strDescripcion,
                "precio" => $this->fltPrecio,
                "stock_minimo" => $this->intStockMinimo,
                "estado" => $this->strStatus,
                "color" => $this->strColor,
                "material" => $this->strMaterial
            );
            
            return $arrProducto;
        }


   }


?>
