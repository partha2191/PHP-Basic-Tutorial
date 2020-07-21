<?php
	require('config/config.php');
	require('config/db.php');
	

	if (isset($_POST['submit'])) {
		// Get the data
		$update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$author = mysqli_real_escape_string($conn, $_POST['author']);
		$body = mysqli_real_escape_string($conn, $_POST['body']);

		$query = "UPDATE posts SET title='$title', author='$author', body='$body' WHERE id={$update_id}";
		
		//The die() is an inbuilt function in PHP. It is used to print message and exit from the current php script. It is equivalent to exit() function in PHP.
		// die($query);

		if (mysqli_query($conn, $query)) {
			header('Location:' .ROOT. '');
		} else{
			echo 'Something went wrong' . mysqli_error($conn);
		}
	}

	// Get the ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// Create Query
	$query = 'SELECT * FROM posts WHERE id = '.$id;

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$post = mysqli_fetch_assoc($result);
	// var_dump($post);
	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>

	<?php include('inc/header.php'); ?>
	<div class="container">
		<h1>Update Post</h1>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
			</div>
			<div class="form-group">
				<label>Author</label>
				<input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
			</div>
			<div class="form-group">
				<label>Body</label>
				<textarea name="body" class="form-control"> <?php echo $post['body']; ?></textarea>
			</div>
			<input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
			<input type="submit" name="submit" value="submit">
		</form>
	</div>
	<?php include('inc/footer.php'); ?>