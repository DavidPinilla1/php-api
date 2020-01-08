<?php
class DB{
    private $dsn = 'mysql:host=localhost;dbname=php';
    private $conn;
    public function connect(){
        try {
           return  $this->conn = new PDO($this->dsn, 'root');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}