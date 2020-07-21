<?php
	session_start();
	$username = $_SESSION['username'];

?>


<?php include('inc/header.php'); ?>
	<div class="container">
		<h3> Welcome to Your dashboard <?php echo $username; ?></h3>
		<a class="btn btn-default" href="logout.php">Logout</a>
	</div>
<?php include('inc/footer.php'); ?>