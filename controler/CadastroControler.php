<?php
	 require_once("../model/Cliente.php");
	 require_once("../model/DAOcliente.php");
	 
			$senha= md5($_POST['senha']);
			$cliente= new Cliente($_POST["nome"],$_POST["email"],$senha);
            $objdao= new DAOcliente;
            $retorno=$objdao->salvar($cliente);
            header("Location: ../login.php");
?>
