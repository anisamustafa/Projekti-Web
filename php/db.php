<?php

    define('DB_HOST' , 'localhost');
    define('DB_USER' , 'root');
    define('DB_PASSWORD' , '');
    define('DB_NAME' , 'g56');
    
    class DatabazeConnection{
        private $conn = null;
        private $host = 'localhost';
        private $dbname = 'g56';
        private $username = 'root';
        private $password = '';     

        public function connectdb(){ try{
               $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",
                                    $this->username, $this->password);
               $this->conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION) . "<br/>" ;
               $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC) . "<br/>";


        }catch(PDOException $pdoe){
            die("Nuk mund te lidhej me databaze {$this->dbname} : " . pdeo->getMessage());

        }return $this->conn;

        }
    }

?>