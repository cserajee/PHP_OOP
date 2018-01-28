<?php
 
 spl_autoload_register(function($classname){
 	include($classname.".php");
 });


 $foo = new Foo;
 $bar = new Bar;

 $foo -> sayHello();
 $bar -> sayHello();