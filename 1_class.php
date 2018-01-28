<?php

class User{

	public function __construct(){
		echo "Constructor Called<br>";
	}
	public function register(){
		echo "USer Registered<br>";
	}
	public function user_login($username, $password){
		$this -> auth_user($username, $password);
	}
	public function auth_user($username, $password){
		echo "User ".$username." is authenticated<br>";
	}
	public function __destruct(){
		echo "Destructor Called<br>";
	}

}



	$user = new User;

	$user -> register();
	$user -> user_login("Raj","1234");