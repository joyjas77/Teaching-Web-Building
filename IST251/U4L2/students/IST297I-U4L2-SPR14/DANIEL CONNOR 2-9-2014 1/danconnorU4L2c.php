<html>
	<head><title>Lab 2 Example C</title></head>
	<body>
		<!-- Unit 3 Lab 4 Example 4-4 -->
		<?php
		$day_number = 337; // <-- book example doesn't declare this and it is an error
		$days_to_new_year = 366 - $day_number; //Expression
		if($days_to_new_year < 30)
		{
			echo "Not long now till new year"; //Statement
		}
		?>
		<?php include "lab2Menu.php"?>
	</body>
</html>