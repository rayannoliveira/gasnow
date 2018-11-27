<?php

require_once("cliente.php");

class Daocliente{

		private $conn;
		private $stmt;
		private $res;
		private $sql;

	public function __construct(){
			$usuario = "root";
		    $senha = "";
		    $this->conn = new PDO("mysql:host=localhost;dbname=gasnow", "$usuario","$senha");
	}
        
        public function salvar($objcliente){
                //Montar o comando SQL
                $this->sql = "Insert into cliente(nome,email,senha) values (:nomeCliente,:emailCliente,:senhaCliente)";
                //Criar um objeto para Preparo do Comando SQL
                $this->stmt = $this->conn->prepare($this->sql);
                //Unir ao comando SQL os dados informados na Tela do Usuário
                $nomeCliente=$objcliente->getNomeCliente();
                $emailCliente=$objcliente->getEmailCliente();
                $senhaCliente=$objcliente->getSenhaCliente();
                
                $this->stmt->bindParam(':nomeCliente',$nomeCliente);
                $this->stmt->bindParam(':emailCliente',$emailCliente);
                $this->stmt->bindParam(':senhaCliente',$senhaCliente);
                
                
                //Executar o comando SQL
                $retorno = $this->stmt->execute();
                return ($retorno);
        }
                
        public function buscarLogin($email,$senha){
        
                $this->sql="select * from cliente where email = '{$email}' and senha ='{$senha}' ";
                $this->stmt = $this->conn->query($this->sql);
                $lista=$this->stmt->fetch();
                return $lista;
                }
                
                public function alterarDados($objdoador){
                $this->sql="update doador set senha, texto, linl where id=";
                $this->stmt=$this->conn->query($this->sql);
                $lista=$this->stmt->execute();
                return $lista;
        }
                public function buscar($idusuario){
                        $id = $idusuario;
                        $this->sql="Select * FROM cliente Where idcliente = '{$id}'";
             
                        $this->stmt=$this->conn->query($this->sql);
                        $linha=$this->stmt->fetch();
                        return $linha;
                }
}
?>