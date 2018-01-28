<?php

class User{

	public $username;
	private $password;

	public function __construct($username, $password){
		echo "Constructor Called<br>";
		$this -> username=$username;
		$this -> password=$password;

	}
	 
	public function user_login(){
		echo $this -> username ." logged in";
	} 

}



	$user = new User("Raj","1234");
 
	$user -> user_login();

	echo $user -> username ;