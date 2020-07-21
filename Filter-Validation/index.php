<?php
	# Message Variables
	$msg = '';
	$msgClass = '';

	# Check for the submit
	if (filter_has_var(INPUT_POST, 'submit')) {
		// Get the values
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		// Check required fields
		if (!empty($name) && !empty($email) && !empty($message)) {
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				// Passed
				$toEmail = 'p.ghosh2191@gmail.com';
				$subject = 'Contact request from' .$name;
				$body = '<h2>Contact Request</h2>
				<h4>Name</h4> <p>'.$name.'</p>
				<h4>Email</h4> <p>'.$email.'</p>
				<h4>Message</h4> <p>'.$message.'</p>
				';

				// Email Header
				$header = "MIME-Version: 1.0" ."\r\n";
				$header .= "Content-Type:text/html; charset=UTF-8" ."\r\n";
				// Additioal header
				$header .= "From" .$name. "<" .$email. ">" . "\r\n";

				if (mail($toEmail, $subject, $body, $header)) {
					// Email Sent
					$emailmsg = "Your Email has been sent";
					$msgClass = "alert-success";
				} else{
					$emailmsg = "Your Email was not sent";
					$msgClass = "alert-danger";
				}
			} else {
				$msg = "Input Correct Email";
				$msgClass = "alert-danger";
			}
		} else{
			$msg = "Fill all the fields";
			$msgClass = "alert-danger";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Contact</a>
			</div>
		</div>
	</nav>
	<div class="container">
	<?php if($msg != ''): ?>
		<div class="alert <?php echo $msgClass; ?>"> <?php echo $msg; ?> </div>
	<?php endif ?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? "$name" : ''; ?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? "$email" : ''; ?>">
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? "$message" : ''; ?></textarea>
			</div>
			<br>
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>