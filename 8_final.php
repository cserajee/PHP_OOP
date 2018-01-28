<?php

class Foo{
 
	Final public function sayHello(){
		echo "Hello from Bar! <br>"; 
	}
 
}

class Bar extends Foo{
 
	public function sayHello(){
		echo "Hello from Bar! <br>"; 
	}
 
}

$bar = new Bar;
$bar -> sayHello();