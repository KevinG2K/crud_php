<?php
    class db {
        private $host = "localhost";
        private $db_name = "crud_php";
        private $username = "root";
        private $password = "";

        // Conexion a la BD
        public function conexion() {
            try {
                $PDO = new PDO("mysql:host=".$this->host.";db_name=".$this->db_name,$this->username,$this->password);
                return $PDO;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }

    $obj = new db();
    print_r($obj->conexion());