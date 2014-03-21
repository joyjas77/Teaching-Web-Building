<html>
<title> IST 250 Lab 1 </title>

<body>
<?php
// This is exercise 3-2. The variable Fred Smith was assigned to the user $username variable.

$username="Fred Smith";
echo $username;

echo "<br><br>";




/* This is a numeric variable. of exercise 3-2 */  

$count = 23;
echo $count;

echo "<br><br>";


/* This a exercise 3-3. It is an example of an array. */

$team = array('Amon', 'James', 'Paul');

echo $team[2];

echo "<br><br>";

/* This is exercise 3-4. It is an exmaple of an multidimensional array. */

$game = array(array('0', '', 'x'),
		array('x', '0', ''),
		array('', 'x', 'x'));
	echo $game[2][1];
	
echo "<br><br>";

/* This is exercise is logical operator that is incremented. */

$x=9;
if ($x ==9)
echo $x;
?>

</body>
</html>