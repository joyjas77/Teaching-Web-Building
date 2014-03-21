<html>
<p>
Unit 3 Lab 1 - Steven Mancini
</p>
</html>
<?php

echo "Example 3-4";
echo "<br/><br/>";
$username = "Fred Smith";
echo $username;
echo "<br />";
$current_user = $username;
echo $current_user;
echo "<br/><br/>";

echo "Example 3-5";
echo "<br/><br/>";
$oxo = array(array('X','', 'o'),
       	     array('o','o','x'),
	     array('x','o', ''));
echo $oxo[1][2];
echo "<br/><br/>";

echo "Example 3-10";
echo "<br/><br/>";
$number = 12345 * 67890;
echo substr($number, 3, 1);
echo "<br/><br/>";

echo "Example 3-11";
echo "<br/><br/>";
$pi = 3.1415927;
$radius = 5;
echo $pi * ($radius * $radius);
echo "<br/><br/>";

echo "Example 3-12";
echo "<br/><br/>";
function longdate($timestamp)
{
	return date("1 F jS Y", $timestamp);
}
echo longdate(time());
echo "<br/><br/>";


echo "Challenge";
echo "<br/><br/>";
$colors = array('Green','Blue','Red','Yellow');
echo $colors[1];
?>
