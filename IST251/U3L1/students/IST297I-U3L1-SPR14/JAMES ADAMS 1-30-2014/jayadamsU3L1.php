<?php
//Jay Adams
//IST 297i
//1/28/2014
//Unit 3 Lab 1 (All examples)

$example = $_GET['example'];

if(empty($example) || $example == '')
{
	echo "<center><h1>Please enter an example # in the url parameter (...php?example=x)</h1>";
	echo "<img src='http://images1.wikia.nocookie.net/disney/images/1/1e/Elsa-elsa-the-snow-queen-35732382-369-548.jpg'></img></center>";
}
else if($example == 1)
{
	echo "Hello World";
}
else if($example == 4)
{
	$username = "Queen Elsa";
	echo $username;
	echo "<br />";
	$current_user = $username;
	echo $current_user;
}
else if($example == 6)
{
	$author = "Princess Anna";
	
	echo "Time is a Headline
	
	This is the first line.
	This is the second.
	- Written by $author.";
}
else if($example == 10)
{
	$number = 12345 * 67890;
	echo substr($number, 3, 1);
}
else if($example == 11)
{
	$pi = 3.1415927;
	$radius = 5;
	echo $pi * ($radius * $radius);
}
else if($example == 'challenge')
{
	$frozenCharacters = array("Elsa","Anna","Olaf","Sven");
	echo $frozenCharacters[1];
}
else
{
	echo "The example you entered was not found, please try a different number";
}
?>