<?php
	session_start();

	//$_SESSION['name'] = 'Jhon Doe';

	$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Session</title>
</head>
<body>
	<h2> Welcome <?php echo $name; ?> and thank you for subscribing with your email <?php echo $email; ?> </h2>
	<a href="page3.php">Go to Page3</a>
</body>
</html>