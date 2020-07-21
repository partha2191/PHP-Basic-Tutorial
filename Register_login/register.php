<?php
	require('config/db.php');

	// Message Variables
	$msg = '';
	$msgclass = '';

	if (filter_has_var(INPUT_POST, 'submit')) {
		// Get the value
		$name = mysqli_real_escape_string($conn, $_POST['fname']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

		if (!empty($name) && !empty($username) && !empty($email) && !empty($password_1) && !empty($password_2)) {
			// Email Sanitization
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
			// Email Validation
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$user_select = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
				$user_check = mysqli_query($conn, $user_select);
				$result = mysqli_fetch_assoc($user_check);

				if ($result) { // if User exist
					if ($result['username'] === $username) {
						$user_exist = 'Username is already exist';
						$msgclass = 'alert-danger';
					}
					if ($result['email'] === $email) {
						$email_exist = 'Email is already exist';
						$msgclass = 'alert-danger';
					}
				} elseif ($password_1 != $password_2) {
					$pass_check = 'Password do not match';
					$msgclass = 'alert-danger';
				} else {
					$query = "INSERT INTO users (name, username, email, password) values ('$name', '$username', '$email', md5('$password_1'))";
					$result = mysqli_query($conn, $query);
					mysqli_close($conn);
					header('Location: login.php');
				}
			} else{
				$email_validate = 'Enter correct email';
				$msgclass = 'alert-danger';
			}		
		} else{
			$msg = 'Fill all the field';
			$msgclass = 'alert-danger';
		}
	}
?>

