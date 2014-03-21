<?php
//example 4-12 Assigning a value and testing for equality
echo "Example 4-12 <br/>";
	$month = "February";
	if($month == "February") echo "It's freezing out here<br/><br/>";

//example 4-15 The four comparison operators
echo "Example 4-15 <br/>";
	$a=2;
	$b=3;
	if ($a > $b) echo "$a is greater than $b <br/>";
	if ($a < $b) echo "$a is less than $b <br/>";
	if ($a >= $b) echo "$a is greater than or equal to $b <br/>";
	if ($a <= $b) echo "$a is less than or equal to $b <br/><br/>";

//example 4-23. A switch statement
echo "Example 4-23 <br/>";
	$page = "Login";
	switch ($page)
	{
		case "Home":
			echo "You selected Home";
			break;
		case "About":
			echo "You selected About";
			break;
		case "News":
			echo "You selected News";
			break;
		case "Login":
			echo "you selected Login";
			break;
		case "Links":
			echo "you selected Links";
			break;
	}
	echo "<br/><br/>";

//Example 4-29 While loop 4 times table
echo "Example 4-29<br/>";
	$count = 1;
	
	while ($count <= 4)
	{
		echo "$count times 4 is ". $count * 4 . "<br/>";
		++$count;
	}
echo "<br/>";

//example 4-33 Outputting the 3 times table with a for loop
echo "Example 4-33 <br/>";
	for($count = 1; $count <=3; ++$count)
		echo "$count times 3 is ". $count * 3 . "<br/>";

/*Challenge: Set a variable that is an integer. Create a PHP statement that tests the value of the variable, multiplies the variable by a set number, 
 prints out the result, increases the value of the variable by 1, and continues to do this until you have 10 lines displaying in your browser */
echo "<br/> Challenge<br/>";
	for($count = 1; $count <=10; ++$count)
	{
		echo "$count * 100 = ". $count *100 ."<br/>";
	}

?>