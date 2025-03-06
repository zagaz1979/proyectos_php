<?php
    // Mostrar todos los errores
    error_reporting(E_ALL);

    // Activar la visualización de errores
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    class Conexion {
        private $host = "localhost";
        private $user = "roota";
        private $password = "";
        private $db = "db_sistema";
        private $conect;

        public function __construct() {
            $connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
            try {
                $this->conect = new PDO($connectionString, $this->user, $this->password);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexion exitosa"; 
            } catch (\Throwable $th) {
                $this->conect = "Error de conexión";
                echo "Error: " . $th->getMessage(); 
            }
        }
    }

    $conect = new Conexion();

?>