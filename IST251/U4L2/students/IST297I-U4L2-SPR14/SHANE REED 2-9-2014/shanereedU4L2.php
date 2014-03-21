<!DOCTYPE html>
<html>
<head>
<title>Shane Reed Unit 4 Lab 1</title>
</head>
<body>
	<?php
		echo "<h3>Example 4-2</h3>";
		echo "a: [" . true . "]<br />";
		echo "a: [" . false . "]<br />";

		echo "<h3>Example 4-3</h3>";
		$myname = "Brian";
		$myage = 37;
		echo "a: " . 73 . "<br />";
		echo "b: " . "Hello" . "<br />";
		echo "c: " . false . "<br />";
		echo "d: " . $myname . "<br />";
		echo "e: " . $myage . "<br />";

		echo "<h3>Example 4-4</h3>";
		$day_number = 360; 
		$days_to_new_year = 366 - $day_number;
		if($days_to_new_year < 30){
			echo "Not long now till new year <br />";
		}
		
		echo "<h3>Example 4-12</h3>";
		$month = "March";
		if($month == "March") echo "It's Springtime";

		echo "<h3>Example 4-29</h3>";
		$count = 1;
		
		while($count <= 12){
			echo "$count times 12 is " . $count * 12 . "<br />";
			++$count;
		}

		echo "<h3>Challenge</h3>";
		for($i = 0;$i < 10;$i++) echo "$i times 10 = ". $i * 10 . "<br />";
	?>
</body>
</html>