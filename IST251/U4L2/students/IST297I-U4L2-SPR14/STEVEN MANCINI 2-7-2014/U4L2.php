<html>
<p>
Unit 4 Lab 2 - Steven Mancini
</p>
</html>

<?php
echo "Example 4-1 <br/>";
echo "a: [" . (20>9) . "]<br/>"; //Testing if 20 is greater than 9, returns a 1 (true)
echo "b: [" . (5==6) . "]<br/>"; //Testing if 5 equals 6, returns null (false)
echo "c: [" . (1==0) . "]<br/>"; //Testing if 1 equals 0, returns null (false)
echo "d: [" . (1==1) . "]<br/>"; //Testing if 1 equals 1, returns 1 (true)
echo "<br/>";

echo "Example 4-3 <br/>";
$myname = "Brian"; 
$myage = 37;
echo "a: ". 73      . "<br/>"; // Numeric Literal
echo "b: "."Hello"  . "<br/>"; // String Literal
echo "c: ". FALSE   . "<br/>"; // Constant Literal
echo "d: ". $myname . "<br/>"; // Variable String Literal
echo "e: ". $myage  . "<br/>"; // Variable Numeric Literal
echo "<br/>";


echo "Example 4-12 <br/>";
$month = "March"; //assign a string to the variable $month
if($month == "March")echo "It's springtime"; //test condition
echo "<br/><br/>";

echo "Example 4-29 <br/>";
$count = 1; // assign 1 to the variable count
while($count <= 12) //iterate through the loop while count is less than or equal to 12
{
	echo "$count times 12 is  " . $count *12 . "<br/>"; //display the count multiplied by 12 for each iteration
	++$count; //update count by 1 through each iteration
}
echo "<br/>";

echo "Example 4-37 <br/>";
$a = 56; //assign 56 to variable a
$b = 12; //assign 12 to variable b
$c = $a/$b; //variable c is variable a divided by variable b
echo $c; //display variable c
echo "<br/><br/>";

echo "Challenge <br/>";
$number = 2;
$counter = 0;
while($counter < 10)
{
	echo "$number times 2 is " . $number*2 . "<br/>";
	++$counter;
	++$number;
}
?>