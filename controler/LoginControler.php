<?php
session_start();
require_once("../model/DAOcliente.php");


 class LoginController{

 	public function __construct(){


 			$email=$_POST['email'];
 			$senha= md5($_POST['senha']);
 			$objdao= new DAOcliente;
 			$retorno =$objdao->buscarLogin($email,$senha);
 			$id=$retorno['idcliente'];
 			echo $id;


			if ($retorno==true) {
			$_SESSION['login'] = $email;
			$_SESSION['senha'] = $senha;
				$_SESSION['id']=$id;
				header("Location: ../resultado.php");
			}
			else{
				unset ($_SESSION['login']);
  				unset ($_SESSION['senha']);
  				header('location:../index.html');
			}
	 
 		
 }

}

new LoginController();
?>