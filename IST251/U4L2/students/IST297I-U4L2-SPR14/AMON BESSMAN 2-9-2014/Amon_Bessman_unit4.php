<html>
<title> Lab 4 </title>
<body>
<?php
// This is example 4-1. These are four simple boolean expression.

echo "a: [". (20>9) ."] <br/>";
echo "b: [". (5==6) ."] <br/>";
echo "c: [". (1==0) ."] <br/>"; 
echo "d: [". (1==1) ."] <br/>";

echo "<br/>";

/* This is example 4-2. This is the outputting the values of True and False */
echo "a:[". True ."] <br/>";
echo "a:[". False ."] <br/>";

echo "<br/>";

$myname ="Amon";
$myage	="37";

echo "a: ". 73      ." <br/>";
echo "b:" ."Hello". "<br/>";
echo "c: ".False." <br/>";
echo "d: ".$myname."<br/>";
echo "e: "."$myage". "<br/>";

echo "<br/>";

/* Example 4-33. Outputtting the 12 times table from a for loop */

for ($count = 7; $count <= 12; ++$count)
	{ 
	echo "$count times 5 is " . $count * 5;
		echo "<br/>";
	}

	
echo "<br/<";

/* This is the Challenge */

$number = 5;
$counter = 0;
while($counter < 15)
{
	echo "$number times 2 is " . $number*2 . "<br/>";
	++$counter;
	++$number;
}








?>
<body>
</html>