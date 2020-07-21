<?php
	session_start();

	print_r($_SESSION);

	$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Session</title>
</head>
<body>
	<h2> Welcome <?php echo $name; ?> </h2>
	<a href="page4.php">LogOut</a>
</body>
</html>