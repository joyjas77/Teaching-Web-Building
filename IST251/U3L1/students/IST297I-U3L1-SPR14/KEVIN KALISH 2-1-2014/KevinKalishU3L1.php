<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Unit 3 Lab 1 Kevin Kalish</title>
</head>

<body>

<?php
echo "This is Kevin Kalish's Lab that was completed in the LABBOORRAAATTTORRY!<br><br>";

// Example 3-3
echo "Example 3-3 <br>";
$mycounter = 1;
$mystring = "Hello";
$myarray = array("One","ARRAYS ARE AWESOME!","Two", "Three");
// print out stuff to the page so it actually does something :) Also I apparently know how to write comments I have such madd skilllzzzz
echo "mycounter = " . $mycounter . "<br>";
echo "mystring = " . $mystring . "<br>";
echo "I'm so boss I'm throwing in the challange into one of the exercieses.... here's the 2nd element: " . $myarray[1] . "<br><br>";


// Example 3-11
echo "Example 3-11 <br>";
$pi = "3.1415927";
$radius = 5;
echo "Pie times (2Radius) = " . $pi * ($radius * $radius) . "<br><br>";




// Example 3-14 
echo "Example 3-14 <br>";
$temp = "The date is ";
echo $temp . longdate(time()) . "<br><br>";
// Remember kids always put your brackets on the line with the beginning of the function so people don't hate you.....
function longdate($timestamp){
	return date("l F jS Y", $timestamp);
}


// Example 3-10 
echo "Example 3-10 and no I don't care these are out of order....<br>";
$number = 12345 * 67890;
echo "number = " . substr($number, 3, 1) . "<br><br>";

// Example 3-6
echo "Example 3-6 <br>";
$author = "Alfred E Newman";
echo "This is a Headline
This is the first line.
This is the second.
Written by $author.";

?>




</body>

</html>
