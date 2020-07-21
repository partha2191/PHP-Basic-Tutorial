<?php
	$path ='/dir0/dir1/myfile.php';
	$file = 'file1.txt';

	
	// Return filename
	echo basename($path).'<br>';

	// Return filename without ext
	echo basename($path, '.php').'<br>';

	// Return the dir name from path
	echo dirname($path).'<br>';

	// Check if file exists
	echo file_exists($file).'<br>';

	// Get abs path
	echo realpath($file).'<br>';

	// Checks to see if file
	echo file_exists('test');

	// Check if writeable
	echo is_writable($file).'<br>';

	// Check if readable
	echo is_readable($file).'<br>';

	// Get file size
	echo filesize($file). '<br>';

	// Create a directory
	// mkdir('testing');

	// Remove dir if empty
	// rmdir('testing');

	// Copy file
	echo copy('file1.txt', 'file2.txt');

	// Rename file
	rename('file2.txt', 'myfile.txt');

	// Delete File
	unlink('myfile.txt');

	// Write from file to string
	echo '<br>'.file_get_contents($file).'<br>';

	// Write string to file
	// echo file_put_contents($file, 'Goodbye World');

	// Append a new text to a file
	// $current = file_get_contents($file);

	// $current .= ' Today we are celebrating independance day';

	// file_put_contents($file, $current);

	// Open File For Reading
	$handle = fopen($file, 'r');
	$data = fread($handle, filesize($file));
	echo $data.'<br>';
	fclose($handle);
	
	// Tells whether the file was uploaded via HTTP POST
	if (is_uploaded_file($file)) {
		echo 'file Uploaded via HTTP POST';
	} else{
		echo 'There is a problem<br>';
	}
	

	// Open file for writing, if file2.txt is not exist then it'll create one.
	$handle = fopen('file2.txt', 'w');
	$txt = "John Doe\n";
	fwrite($handle, $txt);
	$txt = "Steve Smith\n";
	fwrite($handle, $txt);
	fclose($handle);

	echo $handle; 
	// Basically the text 'Resource id #X' occurs when you attempt to convert an internal PHP resource (such as that returned by $handle) into a string.
	