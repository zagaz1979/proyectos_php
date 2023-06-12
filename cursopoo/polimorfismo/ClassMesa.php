<?php

    //Requiere el archivo ClassMueble.php
    require_once("ClassMueble.php");


    //Definimos la clase que hereda de la clase Mueble
    class Mesa extends Mueble{

        //Definir propiedades
        private $strForma = "";
        protected $strTamanio;
        public $strStatus = "Activo";

        //Definir el constructor
        public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material, string $tamanio){
            parent::__construct($descripcion, $precio, $marca, $color, $material);
            $this->strTamanio = $tamanio;
        }


        //Metodoto setter para asignar una nueva forma
        public function setForma(string $forma){
            $this->strForma = $forma;
        }


        //Método para la información del Mesa redefiniendo el método
        public function getInfoProducto(){
            $arrProducto = array(
                "producto" => $this->strDescripcion,
                "precio" => $this->fltPrecio,
                "stock_minimo" => $this->intStockMinimo,
                "estado" => $this->strStatus,
                "color" => $this->strColor,
                "material" => $this->strMaterial,
                "tamaño" => $this->strTamanio,
                "forma" => $this->strForma
            );

            return $arrProducto;
        }



}//end class Mesa
     



?>
