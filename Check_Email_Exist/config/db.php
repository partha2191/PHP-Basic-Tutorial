<?php
	// Create Connection
	$conn = mysqli_connect('localhost','root','','email_exist');

	// Check Connection
	if (mysqli_connect_errno()) {
		// Failed to connect
		echo 'Failed to connect' . mysqli_connect_errno();
	} 

	// Create Table
	/*
	$query = 'CREATE TABLE email(
		id INT AUTO_INCREMENT,
		email VARCHAR(255),
		reg_date TIMESTAMP,
		PRIMARY KEY(id)
	)';

	if (mysqli_query($conn, $query)) {
		echo '';
	}else{
		echo 'Error' . mysqli_error($conn);
	}
	mysqli_close($conn);
	*/

?>