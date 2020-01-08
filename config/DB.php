<?php
class DB{
    private $dsn = 'mysql:host=localhost;dbname=php';
    private $conn;
    public function connect(){
        try {
            $this->conn = new PDO($this->dsn, 'root');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}