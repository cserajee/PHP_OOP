<?php

class User{

	public $username; 
	public static $minLength =5;

	public static function passValidate($password){
		if(strlen($password)>=self::$minLength)
			return "Password Valid!<br>";
		else
			return "Password Invalid!<br>";
	}
 

}

 $pass1="Pass";
 $pass2="Password";

echo User::passValidate($pass1);
echo User::passValidate($pass2);
