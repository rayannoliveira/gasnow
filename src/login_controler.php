<?php

require_once("daocliente.php");


 			$email=$_POST['email'];
 			$senha= md5($_POST['senha']);
 			$objdao= new Daocliente;
 			$retorno =$objdao->buscarLogin($email,$senha);
 			$id= $retorno['idcliente'];

			
			if ($retorno==true) {
				$_SESSION['email'] = $email;
				$_SESSION['senha'] = $senha;
				$_SESSION['id']=$id;
				header("Location: teste.php");
			}
			else{
				unset ($_SESSION['login']);
  				unset ($_SESSION['senha']);
  				header('location:../index.html');
			}
?>