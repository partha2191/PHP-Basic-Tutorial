<?php
	// Multiple values stored into cookies
	$user = ['name' => 'Partha', 'email' => 'partha@gmail.com', 'age' => '28'];

	$user = serialize($user);

	setcookie('user', $user, time() + 3600);

	$user = unserialize($_COOKIE['user']);

	print_r($user);
	echo '<br>';
	echo $user['age'];
