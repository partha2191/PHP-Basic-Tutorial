<?php
	# LOOPS - Execute code set number of times
	/*
		- For
		- While
		- Do.. While
		- Foreach
	*/

	# For Loop
	# @Params - init, condition, increment

	for($i=0; $i<=10; $i++){
		echo 'Number '.$i;
		echo '<br>';
	}

	# While Loop
	# @params - Condition
	# You can use two condition in while using logical &&, || . As in above statement two conditions are being checked that is while loop will run either when strength is less than 100 or ht should be greater than 10.

	$i = 0;

	while($i<10){
		echo 'While ' .$i;
		echo '<br>';
		$i++;
	}

	# Do..While
	# @params - condition
	# Execute atleat once.

	$i = 0;

	do{
		echo 'Do '.$i;
		echo '<br>';
		$i++;
	}

	while($i<10);

	# Foreach Loop - For arrays
	# Indexed
	$people = array('Brad', 'Jose', 'William');

	# foreach(plural as singular)
	foreach($people as $person){
		echo $person;
		echo '<br>';
	}

	# We can also use For loop for Arrays
	$colors = array('Red', 'Yellow', 'Green');
	$arrlength = count($colors);

	for ($i=0; $i < $arrlength; $i++) { 
		echo '<br>';
		echo $colors[$i];
		echo '<br>';
	}

	# Using Associative arrays
	$people = array('Brad' => 'brad@gmail.com','Jose' => 'Jose@gmail.com', 'William' => 'will@gmail.com');
	foreach($people as $person => $email){
		echo '<br>';
		echo $person.': '.$email;
		echo '<br>';
	}
?>