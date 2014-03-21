<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="../../ist297i.css" rel="stylesheet" type="text/css">
	<title>IST297I</title>
</head>
<body>


<p class="directions"><b>Unit 5 Lab 3: Functions and Objects Lab.</b> Make sure you are able to understand
	and code all of the examples in the unit for this week. Shown here are several of these examples in use. Read the comments!
	Remember, don't simply copy and paste the dowloaded examples. It's ok to use them as a guide while learning,
	but you want to type them in and understand the PHP.</p>
	
<p class="directions">Remember, you can learn a lot when you <a href="gregotooleU5L3.txt" title="View code" target="new">study the code</a>.		

<p class="directions"><b>Example 5-1.</b> Some basic built-in PHP functions. Many more built in functions can be found <a href="http://www.tutorialspoint.com/php/php_function_reference.htm" title="PHP Built-in Functions" target="new">here</a>.</p>
	<?php
	echo strrev(" .dlrow olleH"); // Reverse string
	echo str_repeat("Hip ", 2);   // Repeat string
	echo strtoupper("hooray!");   // String to upper case
	?>
	
<br /> <!-- A simple html comment (I'm not inside a PHP parser right now so PHP comments don't work. 
	Putting in a line break to organize. --> 
	
	<!--  This is Example 5-5 --> 
<p class="directions"><b>Example 5-5.</b> Returning values using global variables in a function.</p>
	<?php
	$a1 = "WILLIAM";
	$a2 = "henry";
	$a3 = "gatES";
	
	echo $a1 . " " . $a2 . " " . $a3 . "<br />";
	fix_names();
	echo $a1 . " " . $a2 . " " . $a3;
	
	function fix_names()
	{
		global $a1; $a1 = ucfirst(strtolower($a1));
		global $a2; $a2 = ucfirst(strtolower($a2));
		global $a3; $a3 = ucfirst(strtolower($a3));
	}
	?>


<br /> <!-- A simple html comment --> 
	
	<!--  This is Example 5-10 --> 
<p class="directions"><b>Example 5-10.</b> Define a new object based on the User class. Display the object's properties (that don't have values) in human readable text.</p>
	<?php
	$object = new User;
	print_r($object);
	
	class User
	{
		public $name, $password;
	
		function save_user()
		{
			echo "Save User code goes here";
		}
	}
	?>


<br /> <!-- A simple html comment --> 
	
	<!--  This is Example 5-11 --> 
<p class="directions"><b>Example 5-11.</b> This example extends 5-10 by adding values to the properties of the object. Notice I changed the class to User2 to avoid the error that happens when you try to redeclare a class.</p>
	<?php
	$object = new User2;
	print_r($object); echo "<br />";
	
	$object->name = "Greg";
	$object->password = "mypass";
	print_r($object); echo "<br />";
	
	$object->save_user();
	
	class User2
	{
		public $name, $password;
	
		function save_user()
		{
			echo "Save User code goes here this would save the data to the database";
		}
	}
	?>


<br /> <!-- A simple html comment --> 
	
	<!--  This is Example 5-21 --> 
<p class="directions"><b>Example 5-21.</b> Define a constant within a class. Call the class
directly ("Translate") instead of creating an object or instance of the class. Use the double colon 
operator to do this. You can reference a constant directly using "self" and the double colon as shown in
this static function ("lookup").</p>
	<?php
	Translate::lookup();
	
	class Translate
	{
		const ENGLISH = 0;
		const SPANISH = 1;
		const FRENCH  = 2;
		const GERMAN  = 3;
	
		static function lookup()
		{
			echo self::SPANISH;
		}
	}
	?>


<br /> <!-- A simple html comment -->
<p class="directions"><b>Challenge Solution</b> Here is my solution to the challenge this week.</p> <!--  Challenge this week --> 

	<?php
	function addFunction($num1, $num2, $num3)
	{
	  $sum = $num1 + $num2 + $num3;
	  return $sum;
	}
	$return_value = addFunction(18, 34, 99);
	echo "The sum of my three favorite numbers is:" . " " . $return_value.". Which means absolutely nothing."
	?>

<p>&nbsp;</p>
</body>
</html>