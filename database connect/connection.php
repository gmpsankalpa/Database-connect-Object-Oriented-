<?php
    class Database{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "test";
    public $conn;

        public function __construct(){
            $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);
            return $this->conn;
        }

    }
?>