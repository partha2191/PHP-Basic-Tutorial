<?php
	// Connect to the database
	$conn = mysqli_connect('localhost', 'root', '', 'phplearn');

	// run the query
	if (mysqli_connect_errno()) {
		echo 'Failed to connect '.mysqli_connect_errno();
	}

?>