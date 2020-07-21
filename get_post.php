<?php
	
	if (isset($_GET['name'])) { //isset - check to see if the value is set
		//echo $_GET['name'];
		
		//print_r($_GET); // The print_r() function is used to print human-readable information about a variable. To capture the output in a variable, the parameter should set TRUE. The default value is FALSE.

		//echo htmlentities($_GET['name']);
		$name = htmlentities($_GET['name']); //Cross-Site Scripting (abbreviated as XSS)
		//echo $name;
	}
	/*
	if (isset($_POST['name'])) {
		echo $_POST['email'];
		print_r($_POST);
		$name = htmlentities($_POST['name']);
		echo $name;
	}
	
	if (isset($_REQUEST['name'])) {
		echo $_REQUEST['email'];
		print_r($_REQUEST);
		$name = htmlentities($_REQUEST['name']);
		echo $name;
	}
	
	echo $_SERVER['QUERY_STRING'];
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>
	<form method="GET" action="get_post.php">
		<div>
			<label>Name:</label>
			<input type="text" name="name">
		</div>
		<br>
		<div>
			<label>Email:</label>
			<input type="email" name="email">
		</div>
		<br>
		<div>
			<input type="submit" value="Submit">
		</div>
	</form>
	<ul>
		<li><a href="get_post.php?name=Brad"> Brad </a></li>
		<li><a href="get_post.php?name=Steve"> Steve </a></li>
	</ul>
	<h1> <?php echo "{$name}'s Profile"; ?> </h1>
</body>
</html>