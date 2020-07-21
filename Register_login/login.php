<?php
	require('config/db.php');
	$msg = '';
	$msgclass = '';
	$errormsg = '';
	session_start();

	if (filter_has_var(INPUT_POST, 'submit')) {
		// Get the value
		$fname = mysqli_real_escape_string($conn, $_POST['fname']);
		$pass = mysqli_real_escape_string($conn, $_POST['pass']);
		$pass = md5($pass);

		if (!empty($fname) && !empty($pass)) {
			$selectuser = "SELECT * FROM users WHERE username = '$fname' AND password = '$pass'";
			$checkuser = mysqli_query($conn, $selectuser);

			if (mysqli_num_rows($checkuser) == 1) {
				// Session Variables
				$_SESSION['username'] = $_POST['fname'];

				header('Location: dashboard.php');
			}else{
				$errormsg = 'Check your Username or Password';
				$msgclass = 'alert-danger';
			}
		}else{
			$msg = 'Fill all the field';
			$msgclass = 'alert-danger';
			}
	}
?>

<?php include('inc/header.php'); ?>
	<div class="container contain login">
		<h2>Login to your System</h2>
		<?php if ($msg != ''): ?>
			<div class="alert <?php echo $msgclass; ?>"> <?php echo $msg; ?> </div>
		<?php endif ?>

		<?php if ($errormsg != ''): ?>
			<div class="alert <?php echo $msgclass; ?>"> <?php echo $errormsg; ?> </div>
		<?php endif ?>
		<form class="form-group" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			
			<label>Username</label>
			<input class="form-control" type="text" name="fname">

			<label>Password</label>
			<input class="form-control" type="password" name="pass">

			<input class="form-control" type="submit" name="submit" value="Login">

			<h4>Not Yet a Member, <a href="index.php">Sign Up</a></h4>
		</form>
	</div>
<?php include('inc/footer.php'); ?>