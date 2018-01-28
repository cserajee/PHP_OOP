<?php

class User{

	private $username; 

	public function __set($name,$username){
		echo "Username Set as $username <br>";
		$this -> username=$username;  
	}

	public function __get($name){
		echo "Username get ".$this -> username ."<br>";  
	}

	public function __isset($name){
		echo "Username isset <br>".isset($this -> username);  
		 
	}

}



	$user = new User();
 	$user -> username="Raj" ;
	echo $user -> username;
	echo(isset($user -> username)) ;

	