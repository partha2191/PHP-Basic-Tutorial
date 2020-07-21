<?php

   # Date
	// echo date('d');  // Day
	// echo date('m');  // Month
	// echo date('Y');  // Year
    echo date('d/m/Y'); // All 
    echo '<br>';

   # Time
	// echo date('h');     // Hour
	// echo date('i');     // Minute
	// echo date('s');     // Second
	// echo date('l');     // Day in a week
	// echo date('a');     // AM or PM

	date_default_timezone_set('Asia/Kolkata');
	echo date('h:i:sa');
	echo '<br>';

	/*
	Unix timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00.00.00 GMT) and the time sepecified.
	*/

	$timestamp = mktime(10, 14, 54, 21, 07, 1991);
	$timestamp1 = strtotime('7:00pm August 14 2019');
	$timestamp2 = strtotime('next sunday');
	$timestamp3 = strtotime('+2 days');
	$timestamp4 = strtotime('+2 months');

	echo $timestamp;
	echo '<br>';
	echo date('d/m/Y h:i:sa', $timestamp);
	echo '<br>';
	echo date('d/m/Y h:i:sa', $timestamp1);
	echo '<br>';
	echo date('d/m/Y h:i:sa', $timestamp2);
	echo '<br>';
	echo date('d/m/Y h:i:sa', $timestamp3);
	echo '<br>';
	echo date('d/m/Y h:i:sa', $timestamp4);
?>