<?php
	if (isset($_POST['submit'])) {
		$username = htmlentities($_POST['username']);
		// Set Cookie
		setcookie('username', $username, time() + 3600);

		header('Location: page2.php');
	}
?>	


<!DOCTYPE html>
<html>
<head>
	<title>Set Cookie</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="username">
		<input type="submit" name="submit">
	</form>
</body>
</html>