<?php
	# Ternary Operator
	# The ternary operator is the only operator in PHP which requires three operands: the condition, the true and the false result.

	$loggedIn = false;
	$arr = [1,2,3,4,5];

	/*
	if($loggedIn){
		echo 'You are logged in';
	} else{
		echo 'You are not logged in';
	}
	*/

	/*
	echo ($loggedIn ? 'You are logged in' : 'You are not logged in');
	*/

	/*
	$isRegistered = ($loggedIn == true) ? true : false;
	echo $isRegistered;
	*/

	# Simple Logic

	/*
	$age = 20;
	$score = 14;

	echo 'Your score is: '.($score > 15 ? ($age > 20 ? 'Average':'Excellent'):($age >= 20 ? 'Horrible' : 'Average'));
	*/
?>
	<div>
		<?php if ($loggedIn) { ?>
			<h1> Welcome User </h1>
		<?php } else { ?>
			<h1> Welcome Guest </h1>
		<?php } ?>	
	</div>

	<!-- Professional ways -->
	<div>
		<?php if ($loggedIn): ?>
			<h1> Welcome User </h1>
		<?php else: ?>
			<h1> Welcome Guest </h1>
		<?php endif ?>
	</div>

	<div>
		<?php foreach ($arr as $val) { ?>
			<span> <?php echo $val; ?> </span>
		<?php } ?>
	</div>

	<div>
		<?php for ($i=0; $i <=10 ; $i++) { ?>
			<h3> <?php echo $i; ?> </h3>
		<?php } ?>
	</div>