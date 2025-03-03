<?php
    class Database {
        private $pdo;
        private static $instance = null;
    
        private function __construct() {
            $db_server = "172.18.0.3";
            $db_user = "root";
            $db_pass = "password";
            $db_name = "cafthe";

            try {
                $this->pdo = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_pass);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                die("Erreur de connexion ".$e->getMessage());
            }
        }

        public static function getInstance() {
            if (self::$instance === null){
                self::$instance = new Database();
            }
            return self::$instance;
        }

        public function getConnection() {
            return $this->pdo;
        }
    }
?>