<?php

    class Persona{

        //Definir las propiedades
        public $intDpi;
        public $strNombre;
        public $intEdad;

        //Definir el método constructor
        function __construct(int $dpi, string $nombre, int $edad)
        {
            $this->intDpi = $dpi;
            $this->strNombre = $nombre;
            $this->intEdad = $edad;
        }

        //Método para mostrar información de la persona
        public function getDatosPersonales()
        {
            $datos = "
                <h2>Datos personales</h2>
                DPI: {$this->intDpi} <br>
                NOMBRE: {$this->strNombre} <br>
                EDAD: {$this->intEdad} <br>
            ";

            return $datos;
        }

    }//end class Persona

?>