<?php
	// require_once('test/test.php');
	require_once('register.php');	
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<form method="POST" class="form-group" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<div class=container> 
			<?php if (isset($email_error)): ?>
				<div class="alert alert-danger">
					<?php echo $email_error; ?>	
				</div>
			<?php else: ?>
				<?php if (isset($email_empty)): ?>
					<div class="alert alert-danger">
						<?php echo $email_empty; ?>	
					</div>
				<?php else: ?>
					<?php if (isset($email_saved)): ?>
						<div class="alert alert-success">
							<?php echo $email_saved; ?>	
						</div>
					<?php endif ?>
				<?php endif ?>
			<?php endif ?>
			<label class="control-label col-sm-2">Email: </label>
			<input type="text" class="form-control" name="email" placeholder="Enter Email..">
			<br><br>
			<input type="submit" class="btn btn-default" name="submit" value="Register">
		</div>
	</form>
</body>
</html>