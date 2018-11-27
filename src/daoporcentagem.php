<?php

require_once("daoporcentagem.php");

class Daoporcentagem{

    private $conn;
        private $stmt;
        private $res;
        private $sql;

    public function __construct(){
            $usuario = "root";
            $senha = "";
            $this->conn = new PDO("mysql:host=localhost;dbname=gasnow", "$usuario","$senha");
    }

    public function buscar($Cliente){
        $this->sql="Select * FROM gasnow WHERE Cliente = '{$Cliente}' ORDER BY max_id DESC"; 
        $this->stmt=$this->conn->query($this->sql);
        $linha=$this->stmt->fetch();
        return $linha;
    }  
}
?>