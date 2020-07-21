<?php
	# substr
	# Returns a portion of a string
	
	$output = substr('Hello', 1, 3);
	$output = substr('Hello', -2);
	echo $output;

	echo '<br>';

	# strlen()
	# Returns the length of a string

	$output = strlen('Hello World');
	echo $output;

	echo '<br>';

	# strpos()
	# Find the position of the first occurence of a sub string

	$output = strpos('Hello World', 'o');
	echo $output;

	echo '<br>';

	# strrpos()
	# Find the position of the last occurence of a sub string

	$output = strrpos('Hello World', 'o');
	echo $output;

	echo '<br>';

	# trim()
	# Strips whitespace
	
	$text = 'Hello World            ';
	var_dump($text);
	echo '<br>';
	$trimmed = trim($text);
	var_dump($trimmed);

	echo '<br>';
	
	# strtoupper
	# Makes everything upper

	$output = strtoupper('hello world');
	echo $output;

	echo '<br>';

	# strtolower
	# Makes everything lower

	$output = strtolower('HELLO WORLD');
	echo $output;

	echo '<br>';

	# ucwords()
	# Capitalizes every words

	$output = ucwords('hello ladies');
	echo $output;

	echo '<br>';

	# str_replace()
	# Replace all occurences of a search string with a replacement

	$text = 'Hello World';
	$output = str_replace('world', 'Everyone', $text);
	echo $output;
	echo '<br>';
	$output = str_replace('World', 'Everyone', $text);
	echo $output;

	echo '<br>';

	# is_string()
	# Check if string

	$val = '22';
	$output = is_string($val);
	echo $output;

	echo '<br>';

	$values = array(true, false, null, 'abc', 22, '22', 14.14, '14.14', '', ' ', 0, '0');

	foreach($values as $value){
		if(is_string($value)){
			echo "{$value} is a string<br>";
		}
	}
	
	echo '<br>';

	# gzcompress()
	# Compress a string

	$string = 'This example lets you parse an unparsed strings variables. Warning: This could cause security leaks if you allow users to pass $variables through this engine. I recommend only using this for your Content Management System.';

	$compressed = gzcompress($string);
	echo "{$compressed} <br>";
	$original = gzuncompress($compressed);
	echo $original;
?>