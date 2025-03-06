<?php

    //Requiere la clase Persona
    //require_once("ClassPersona.php");
    require_once("autoload.php");

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
        

    }//end class Cliente

?>