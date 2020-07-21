<?php
	// For more reference - https://www.php.net/manual/en/function.crypt.php

	// Normal Password
	$password = mysqli_real_escape_string('$conn', $_POST['password']);

	// Converting the normal password to encrypted password
	$hashFormat = "$2y$10$";
	$salt = "iusesomecrazystrings22"; // We can also set the salt be automatically generated.
	$hashF_and_salt = $hashFormat . $salt;
	$enc_password = crypt($password, $hashF_and_salt);

	$query = "INSERT INTO table (username, password) ";
	$query .= "VALUES ('$username', '$enc_password')";

	// Now Converting the encrypted password to our normal password
	$password = crypt($password, $enc_password);
?>