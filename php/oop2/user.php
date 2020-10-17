<?php 

class user {
	//properties:
	//access modifier
	protected $name;
	protected $email;
	protected $age;

	//construct 
	function __construct($name, $age, $email){
		$this->name = $name;
		$this->age = $age;
		$this->email = $email;

	}


	//getters and setters
	//getter:
	 function getName(){
		return $this->name;
	}

	function setName($newName){
		$this->name = $newName;
	}

	 function getEmail(){
		return $this->email;
	}

	function setEmail($newEmail){
		echo strpos($newEmail,'@');
		if(strpos($newEmail,'@') ){
			echo strpos($newEmail,'@');
			$this->email = $newEmail;
		}
		else{
			echo "This is not a good email";
		}
	}

	function add10years(){
		$this->age += 10;
	}

	//methods:
	function print(){
		echo "from user class <br>";
		echo "$this->name  $this->age $this->email ";

	}

	function login(){}

	function calcBirthday(){}


}



 ?>