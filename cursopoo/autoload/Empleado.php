<?php

    //require_once("ClassPersona.php");
    require_once("autoload.php");

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

        public function setMensaje(string $mensaje) {
            $this->mensaje = $mensaje;
        }

        public function getMensaje(): string {
            return $this->mensaje . " " . $this->strNombre;
        }


    }//end class Empleado

?>