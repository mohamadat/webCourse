<?php 

abstract class payment{
	protected $username;
	protected $saldo;
	protected $bank = 9999;

	function getBank(){
		return $this->bank;
	}


	abstract function pay();



	}

