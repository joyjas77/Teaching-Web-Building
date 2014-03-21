<?php
//Jay Adams
//IST 297i
//2/07/2014
//Unit 4 Lab 2 (All examples)

$example = $_GET['example'];

if(empty($example) || $example == '')
{
	echo "<center><h1>Please enter an example # in the url parameter (...php?example=x)</h1>";
	echo "<img src='http://static3.wikia.nocookie.net/__cb20131230025413/rise-of-the-brave-tangled-dragons/images/1/1c/AnnaofArendelle.jpg'></img></center>";
}
else if($example == 1)
{
	echo "a: [".(20 > 9)."]<br />";
	echo "b: [".(5 == 6)."]<br />";
	echo "c: [".(1 == 0)."]<br />";
	echo "d: [".(1 == 1)."]<br />";
}
else if($example == 2)
{
	echo "a: [" . TRUE  . "]<br />";
	echo "b: [" . FALSE . "]<br />";
}
else if($example == 3)
{
	$myname = "Brian";
	$myage = 37;
	echo "a: " . 73      . "<br />"; // Numeric literal
	echo "b: " . "Hello" . "<br />"; // String literal
	echo "c: " . FALSE   . "<br />"; // Constant literal
	echo "d: " . $myname . "<br />"; // Variable string literal
	echo "e: " . $myage  . "<br />"; // Variable numeric literal
}
else if($example == 4)
{
	$day_number = 340;
	$days_to_new_year = 366 - $day_number;
	if($days_to_new_year < 30)
	{
		echo "The new year is coming soon!";
	}
}
else if($example == 11)
{
	$level = $score = $time = 5;
	echo $level;
}
else if($example == 'challenge')
{
	$variable = 5;
	if($variable == 5 || $variable > 3)
	{
		$variable *= 3;
	}
	
	for($i = 0; $i < 10; $i++)
	{
		echo $variable++.'<br />';
	}
}
else
{
	echo "The example you entered was not found, please try a different number";
}
?>