<?php

    require_once("ClassPersona.php");

    class Empleado extends Persona{

        //Definir propiedades
        protected $strPuesto;

        //Definiendo el constructor
        function __construct(int $dpi, string $nombre, int $edad)
        {
            parent::__construct($dpi, $nombre, $edad);
        }

        //metodo setter
        public function setPuesto(string $puesto)
        {
            $this->strPuesto = $puesto;
        }

        //metodo getter
        public function getPuesto():string
        {
            return $this->strPuesto;
        }

    }//end class Empleado

?>