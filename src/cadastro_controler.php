<?php
	 
	 require_once("daocliente.php");
         require_once("cliente.php");
     
     
   
           $senha= md5($_POST['senha']);
            $cliente= new Cliente($_POST["nome"],$_POST["email"],$senha);
            $objdao= new Daocliente;
            $retorno=$objdao->salvar($cliente);
			header("Location: login.html");
            
                
?>
