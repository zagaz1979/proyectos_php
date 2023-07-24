<?php

    class Operacion{

        //Propiedades
        public $cantidaduno = 0;
        public $cantidaddos = 0;
        public $resultado = 0;

        //método constructor 
        function __construct($intcant1, $intcant2){
            $this->cantidaduno = $intcant1;
            $this->cantidaddos = $intcant2;
        }

        //método getSuma()
        public function getSuma(){
            $this->resultado = $this->cantidaduno + $this->cantidaddos;
            return $this->resultado;
        }

        //método getResta()
        public function getResta(){
            $this->resultado = $this->cantidaduno - $this->cantidaddos;
            return $this->resultado;
        }

        //método getMultiplicacion()
        public function getMultiplicacion(){
            $this->resultado = $this->cantidaduno * $this->cantidaddos;
            return $this->resultado;
        }

        //método getDivision)
        public function getDivision(){
            $this->resultado = $this->cantidaduno / $this->cantidaddos;
            return $this->resultado;
        }


    }//end class Operacion

?>