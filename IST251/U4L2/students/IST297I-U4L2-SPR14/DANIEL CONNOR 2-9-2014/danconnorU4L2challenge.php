<html>
	<head><title>Lab 2 Challenge</title></head>
	<body>
		<!-- Unit 3 Lab 4 Challenge -->
		<?php
		echo "Do the following: <br> Set a variable that is an integer. Create a PHP statement that tests the value of the variable, multiplies the variable by a set number, prints out the result, increases the value of the variable by 1, and continues to do this until you have 10 lines displaying in your browser.<br><br>";
		$challengeVar = 10;
		$count = 0;
		while($count < 10)
		{
			$challengeVar *= 2;
			echo $challengeVar . "<br>";
			$challengeVar++;
			$count++;
		}
		?>
		<?php include "lab2Menu.php"?>
	</body>
</html>