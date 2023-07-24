<?php

    class Usuario{

        //Definiendo las propiedades
        private $strNombre;
        private $strEmail;
        private $strTipo;
        private $strClave;
        protected $strFechaRegistro;
        static $strEstado = "Activo";

        //Crear el método constructor
        function __construct(string $nombre, string $email, string $tipo){
            $this->strNombre = $nombre;
            $this->strEmail = $email;
            $this->strTipo = $tipo;
            $this->strClave = rand();
            $this->strFechaRegistro = date("Y-m-d H:m:s");
            
        }

        //Metodo getter para obtener una propiedad private
        public function getNombre():string
        {
            return $this->strNombre;
        }

        public function getEmail():string
        {
            return $this->strEmail;
        }

        public function getTipo():string
        {
            return $this->strTipo;
        }

        public function getPerfil()
        {
            echo "Datos del usuario <br>";
            echo "Nombre: " . $this->strNombre . "<br>";
            echo "Email: " . $this->strEmail . "<br>";
            echo "Fecha registro: " . $this->strFechaRegistro . "<br>";
            echo "Clave: " . $this->strClave . "<br>";
            echo "Estado: " . self::$strEstado . "<br>";
            echo "Tipo: " . $this->strTipo . "<br>";
        }

        public function setCambiarClave(string $pass)
        {
            $this->strClave = $pass;
        }


    }//end class Usuario

?>