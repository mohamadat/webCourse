<?php 

class admin extends user{
	//prop & methods
	public $adminLevel;

	function __construct($name, $age, $email,$lvl){
		parent::__construct($name, $age, $email);
		$this->adminLevel = $lvl;

	}

	function deleteAllusers(){}

	function print(){
		echo "from admin class <br>";
		echo "$this->name  $this->age $this->email"; 
		// parent::print();
		echo $this->adminLevel;
	}


}

