<?php
	require('register.php');
?>

<?php include('inc/header.php'); ?>
	<div class="container contain register">
		<h2>Registration</h2>
		<?php if ($msg != ''): ?>
			<div class="alert <?php echo $msgclass; ?>"> <?php echo $msg; ?> </div>
		<?php endif ?>
		
		<form class="form-group" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

			<label>Full Name:</label>
			<input class="form-control" type="text" name="fname">

			<label>Username:</label>
			<input class="form-control" type="text" name="username">

			<?php if(isset($user_exist)): ?>
			<div class="alert <?php echo $msgclass; ?>"> <?php echo $user_exist; ?></div>
			<?php endif ?>

			<label>Email:</label>
			<input class="form-control" type="email" name="email">
			
			<?php if(isset($email_validate)): ?>
			<div class="alert <?php echo $msgclass; ?>"> <?php echo $email_validate; ?> </div>
			<?php endif ?>

			<?php if(isset($email_exist)): ?>
			<div class="alert <?php echo $msgclass; ?>"> <?php echo $email_exist; ?> </div>
			<?php endif ?>

			<label>Password:</label>
			<input class="form-control" type="password" name="password_1">

			<label>Confirm Password:</label>
			<input class="form-control" type="password" name="password_2">

			<?php if(isset($pass_check)): ?>
			<div class="alert <?php echo $msgclass; ?>"> <?php echo $pass_check; ?> </div>
			<?php endif ?>

			<input class="btn btn-yellow" type="submit" name="submit" value="Register">
			<h4>Already registered with us, <a href="login.php">Click to Login</a></h4>
		</form>
	</div>
<?php include('inc/footer.php'); ?>