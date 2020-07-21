<?php
	// Set Cookie
	setcookie('username', 'Frank', time() + 3600);
	
	// Delete Cookie
	// setcookie('username', 'Frank', time() - 4600);

	if (count($_COOKIE) > 0) {
		echo 'There are '.count($_COOKIE). ' Cookies Saved<br>';
	} else {
		echo 'There is no cookie<br>';
	}

	if (isset($_COOKIE['username'])) {
		echo 'User '.$_COOKIE['username'].' is set'; 
	} else{
		echo 'User is not set';
	}
