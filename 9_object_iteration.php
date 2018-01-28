<?php

class User{

	public $person1 = "User1";
	public $person2 = "User2";
	private $person3 = "User3";
	protected $person4 = "User4";

 
	public function showUser(){
		foreach($this as $key => $value)
		echo "$key => $value <br>"; 
	}
 
}

class User1 extends User{
 
 
	public function showUser1(){
		foreach($this as $key => $value)
		echo "$key => $value <br>"; 
	}
 
}

 $user = new User;
 $user -> showUser();

 echo "///////Inherit/////////<br>";

 $user1 = new User1;
 $user1 -> showUser1();

 echo "///////Outer/////////<br>";
 
foreach($user as $key => $value)
echo "$key => $value <br>";