<?php

abstract class Animal{
	public $name;
	public $color;

	public function describe()
	{
		echo $this->name.' is '.$this -> color;
	}

	abstract public function makeSound();

}

class Duck extends Animal{
	public function describe(){
		return parent::describe();
	}

	public function makeSound()
	{
		echo " sound Quack<br>";
	}
}

class Dog extends Animal{
	public function describe(){
		return parent::describe();
	}

	public function makeSound()
	{
		echo " sound Lool<br>";
	}
}

$duck = new Duck;
$duck -> name = "Duck Looie";
$duck -> color = "Brown";
$duck -> describe();
$duck -> makeSound();

$dog = new Dog;
$dog -> name = "Doni";
$dog -> color = "White";
$dog -> describe();
$dog -> makeSound();




