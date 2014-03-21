<!DOCTYPE html>
<html>
<head>
<title>Unit 3 Lab - Hello World!</title>

</head>
<body>
	<?php
		// Example 3-1
		echo "Hello world!";
		
		echo "<br />";
		
		// Example 3-2
		/*
		 * This is a...
		 * multi-line comment.
		 */
	
		echo "<br />";
		
		//Example 3-3
		$anInteger = 24;
		$aString = "String.";
		$anArray = array("Green", "Blue", "Red");
	
		echo "<br />";
		
		// test1.php
		$username = "Fred Smith";
		echo $username;
		echo "<br />";
		$current_user = $username;
		echo $current_user;
		
		echo "<br />";
		
		// Example 3-5
		$oxo = array(array('x','','o'), array('o','o','x'), array('x','o',''));
		echo $oxo[1][2];
		
		echo "<br />";
		
		// Challenge
		$challenge = array('Audi', 'BMW', 'Cadillac', 'Ferrari');
		echo $challenge[1];
	?>
</body>
</html>