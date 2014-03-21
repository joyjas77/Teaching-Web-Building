<html>
	<head><title>Lab 2 Example E</title></head>
	<body>
		<!-- Unit 3 Lab 4 Example 4-22 -->
		<?php
		$page = "Home";//<-- declared this so that there would be output
		if ($page == "Home") echo "You selected Home";
		elseif ($page == "About") echo "You selected About";
		elseif ($page == "News") echo "You selected News";
		elseif ($page == "Login") echo "You selected Login";
		elseif ($page == "Links") echo "You selected Links";
		?>
		<?php include "lab2Menu.php"?>
	</body>
</html>