<?php

    //Requiere la clase Persona
    require_once("ClassPersona.php");

    //Clase Cliente heredando de Persona
    class Cliente extends Persona {

        //Definir las propiedades
        private $fltCredito;

        function __construct(int $dpi, string $nombre, int $edad)
        {
            parent::__construct($dpi, $nombre, $edad);
        }

        //metodo setter
        public function setCredito(string $credito)
        {
            $this->fltCredito = $credito;
        }

        //metodo getter
        public function getCredito():string
        {
            return $this->fltCredito;
        }

    }//end class Cliente

?>