<?php
	require_once('config/db.php');
	
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];

		$selectemail = "SELECT * FROM email WHERE email = '$email'";
		$checkemail = mysqli_query($conn, $selectemail);

		if (mysqli_num_rows($checkemail) > 0) {
			$email_error = 'Email is already exists';
		} else{
			if (empty($email)) {
				$email_empty = 'Email can not be empty';
			}else{
				$query = "INSERT INTO email (email, reg_date) VALUES ('$email', now())";
				$result = mysqli_query($conn, $query);
				$email_saved = 'Your Email is registered with us';
				mysqli_close($conn);
			}
		}
	}
?>