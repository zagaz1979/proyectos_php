<?php

    abstract class Persona{

        //Definir las propiedades
        public $intDpi;
        public $strNombre;
        public $intEdad;
        public $mensaje;

        //Definir el método constructor
        function __construct(int $dpi, string $nombre, int $edad)
        {
            $this->intDpi = $dpi;
            $this->strNombre = $nombre;
            $this->intEdad = $edad;
        }

        //Método para mostrar información de la persona
        abstract public function getDatosPersonales();
        abstract public function setMensaje(string $mensaje);
        abstract public function getMensaje(): string;

    }//end class Persona

?>