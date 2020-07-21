<?php
	# Function - Block of code that can be repeatedly called

	/*
		Camel Case - myFunction()
		Lower Case - my_function()
		Pascal Case - MyFunction()
	*/

	// Create Simple Function
	function simpleFunction(){
		echo 'Hello World<br>';
	}

	// Run Simple Function
	simpleFunction();

	// Function with Param
	# World is the default value in case user doesn't input value.
	function sayHello($name = 'World'){
		echo "Hello $name<br>";
	}

	sayHello('Partha');

	// Return Value
	function addNumber($num1, $num2){
		echo $num1 + $num2;
		echo '<br>';
		return $num1 + $num2;
	}

	addNumber(2,3);
	echo addNumber(4,5);

	# By reference

	$myNum = 10;
	function addFive($num){
		$num += 5;
	}

	function addTen(&$num){
		$num += 10;
	}

	addFive($myNum);
	echo "<br>Value: $myNum<br>";

	addTen($myNum);
	echo "Value: $myNum<br>";


?>