<?php
class Cliente{
	//private $idDoador;
	private $nomeCliente;
	private $emailCliente;
	private $senhaCliente;
	
	public function __construct($nomeCliente,$emailCliente,$senhaCliente){

		//this->idDoador=$idDoador;
		$this->nomeCliente=$nomeCliente;
		$this->emailCliente=$emailCliente;
		$this->senhaCliente=$senhaCliente;
		

	}
	//public function setIdDoador($idDoador){
	//	      $this->idDoador = $idDoador;
	//	   }
	public function setNomeCliente($nomeCliente){
		      $this->nomeCliente = $nomeCliente;
		   }
	public function setEmailCliente($emailCliente){
			$this->emailCliente=$emailCliente;
	}
	public function setSenhaCliente($senhaCliente){
			$this->senhaCliente=$senhaCliente;
	}

	
	public function getNomeCliente(){
		      return ($this->nomeCliente);
		   }
	public function getEmailCliente(){
			return ($this->emailCliente);
	}

	public function getSenhaCliente(){
			return ($this->senhaCliente);
	}
	

}
?>