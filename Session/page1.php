<?php
	# It depends on the server configuration or the relevant directives session.gc_maxlifetime in php.ini . Typically the default is 24 minutes (1440 seconds), but your webhost may have altered the default to something else.
	
	if (isset($_POST['submit'])) {
		session_start();

		$_SESSION['name'] = $_POST['name'];
		$_SESSION['email'] = $_POST['email'];

		header('Location:page2.php');
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Session</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="name">
		<input type="text" name="email">
		<input type="submit" name="submit">
	</form>
</body>
</html>