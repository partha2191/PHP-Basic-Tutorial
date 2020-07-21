<?php
	#CONDITIONALS
	
	/*
		== -> Matches values
		=== -> Values and datatypes
		<
		>
		<=
		>=
		!=
		!== -> Not Identical
	*/

	# If, else, elseif	
	$num = 7;

	if($num == 5){
		echo '5 Passed';
	} elseif ($num == 6) {
		echo '6  Passed';
	}
	else{
		echo 'didn\'t Pass';
	}

	# Nesting IF
	$num = 9;

	if($num > 4){
		if ($num <10) {
			echo "<br> $num Passed";
		}
	}

	# Logical Operators

	/*
		AND - &&
		OR  - ||
		XOR - one has to be passed but not both
	*/
	$num = 5;

	if ($num > 4 && $num < 10) {
		echo "<br> $num Passed";
	} else{
		echo '<br> did not pass';
	}

	if ($num > 4 OR $num < 10) {
		echo "<br> $num Passed";
	} else{
		echo '<br> did not pass';
	}

	if ($num > 4 XOR $num < 10){
		echo "<br> $num Passed";
	} else{
		echo '<br> did not pass <br>';
	}

	# Switch Case
	$favColor = 'yellow';

	switch ($favColor) {
		case 'red':
			echo 'Your favourite color is red';
			break;
		case 'blue':
			echo 'Your favourite color is blue';
			break;
		case 'green';
			echo 'Your favourite color is green';
			break;
		default:
			echo 'Your favourite color is something else';
			break;
	}
?>