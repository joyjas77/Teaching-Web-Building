<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>IST 297I | Unit 4 Lab 2</title>
    <style type="text/css">
		p.output {
			border-style:solid;
			border-width:1px;
			font-family:"Lucida Console", Monaco, monospace;
		}
		
	</style>
</head>


<body>

<h1>IST 297I | Unit 4 Lab 2</h1>
<p>By: Rebecca Krish</p>
</br>

<h2>Example 4-3</h2>
<p class="description">
	The first line of output is trying to display the value of "TRUE", and the second line is trying to display the value of "FALSE". In PHP, 'TRUE" is equal to "1", and "FALSE" is equal to nothing. It is important to check what true and false values equate to when using different programming languages in order to troubleshoot errors effectively.
</p>
<p class="output">
	<?php
    	echo "a: [" . TRUE . "]<br />";
		echo "b: [" . FALSE . "]<br />";
    ?>
</p>
</br>

<h2>Example 4-16</h2>
<p class="description">
	The variable "a" is set to "1000", and the variable "b" is set to "+1000". When comparing the two numbers, "1" will be displayed if "a" is not the same as "b" numerically, and "2" will be displayed if the two variables are not equal to each other numerically with respect to their operand types. An output of "2" will appear since the two numbers are identical numerically.
</p>
<p class="output">
	<?php
    	$a = "1000";
		$b = "+1000";
		if ($a != $b) echo "1";
		if ($a !== $b) echo "2";
    ?>
</p>
</br>

<h2>Example 4-24</h2>
<p class="description">
	This code demonstrates the switch statement with the addition of the "Default" option. If the "page" variable is set to "Home", "About", "News", "Login", or "Links", appropriate output will be printed to the screen. If none of these options is chosen, the output will be "Unrecognized selection".
</p>
<p class="output">
	<?php
		$page = "Login";
    	switch ($page){ 
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
				echo "You selected Login"; 
				break; 
			case "Links": 
				echo "You selected Links"; 
				break;
			default: 
				echo "Unrecognized selection"; 
				break;
		}
    ?>
</p>
</br>

<h2>Example 4-26</h2>
<p class="description">
	Check to see if a variable called "Fuel" is less than or greater than 1. If it is, display "Fill tank now". If it is not, display "There's enough fuel".
</p>
<p class="output">
	<?php
		$fuel = 1;
    	echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";
    ?>
</p>
</br>

<h2>Example 4-34</h2>
<p class="description">
	
</p>
<p class="output">
	<?php
    $count = 1;
    do {
        echo "$count times 12 is " . $count * 12;
        echo "<br />";
    } while (++$count <= 12);
    ?>
</p>
</br>

<h2>Challenge Mode</h2>
<p class="description">
	"Set a variable that is an integer. Create a PHP statement that tests the value of the variable, multiplies the variable by a set number, prints out the result, increases the value of the variable by 1, and continues to do this until you have 10 lines displaying in your browser."
</p>
<p class="output">
	<?php
		// Setting integer variable
    	$integer = 100; 
		// Test the value of the integer. While the number hasn't increased by 10...
		while ($integer < 110) {  
			// Multiply the integer by 2, display it, then add 1 to the integer.
			echo $integer++ * 2 . "<br />";
		}
    ?>
</p>

</body>

</html>