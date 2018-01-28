<?php

class First{
	public $id ="25";
	protected $username = "Raj"; 
	private $password = "1234"; 

	public function show($label){
		echo "<br>show: $label ";  
	} 

}

class Second extends First{
	public function getname()
	{
		echo $this -> username;
	}
}



	$second = new Second;

	echo '1 -> '.$second -> id;
	
	echo '<br>2 -> '.$second -> show("Hello PHP");
	echo '<br>3 -> '.$second -> getname();

	echo '<br>4 -> '.$second -> password;

	echo '<br>5 -> '.$second -> username;
 

	