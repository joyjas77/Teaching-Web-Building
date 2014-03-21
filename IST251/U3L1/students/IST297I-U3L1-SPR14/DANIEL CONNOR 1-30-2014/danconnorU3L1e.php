<!DOCTYPE HTML>
<html>
	<head>
		<title>Lab 1, example 5</title>
	</head>
	<body>
		<?php //example 3-15, page 59
		$temp = "The date is ";
		echo $temp . longdate(time());
		
		function longdate($timestamp)
		{
			return date("l F jS Y", $timestamp);
		}
		?>
		<?php include 'lab1menu.php';?>
	</body>
</html>