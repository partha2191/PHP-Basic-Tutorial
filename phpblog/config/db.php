<?php
	require('config.php');
	// Create Connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check Connection
	if (mysqli_connect_errno()) {
		// Connection Failed
		echo 'failed to connect to MySQL '. mysqli_connect_errno();
	} else{
		echo 'Database is connected';
	}

?>