<?php

    namespace Zagaz\Notas\lib;

    //importar PDO
    use PDO;
    use PDOException;

    class Database{

        //Definir variables
        private string $host;
        private string $db;
        private string $user;
        private string $password;
        private string $charset;

        //Definir el constructor
        public function __construct()
        {
            $this->host = 'localhost';
            $this->db = 'notas';
            $this->user = 'root';
            $this->password = 'Sistema.com_2';
            $this->charset = 'utf8mb4';            
        }

        //Conexión de mysql con php
        public function connect(){
            try {
                $connection = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    pdo::ATTR_EMULATE_PREPARES => false
                ];

                $pdo = new PDO($connection, $this->user, $this->password, $options);

                return $pdo;

            } catch (PDOException $th) {
                throw $th;
            }
        }

    }

