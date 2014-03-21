<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tyler_BartosU4L2</title>
</head>

<body>
<?php
//Ex 4.3
	$myname = "Tyler";
	$myage = 21;
	echo "a: ". 73 ."<br/>"; //Numeric Literal
	echo "b: ". "Hello" ."<br/>"; //String Literal 
	echo "c: ". FALSE ."<br/>"; //Contant Literal 
	echo "d: ". $myname ."<br/>"; //Variable String Literal 
	echo "e: ". $myage . "<br/>"; //Variable Numeric Literal 
?>
<br />
<?php
//Ex 4.4 
	$days_to_new_year = 366; 
	$day_number = 346;
	$days_to_new_year - $day_number; //Expression
	if ($days_to_new_year - $day_number < 30)
	{
		echo "Not long now till new year"; // Statement 
	} 
?>
<br />
<?php
//Ex 4.13
	$A = "1000";
	$B = "+1000";
	if ($A == $B) echo "1";
	if ($A === $B) echo "2";
/* Outputs 1 because the == checks for equality numerically whereas === checks equality through identity */
?>
<br />
<?php
//EX 4.14
	$A = "1000";
	$B = "+1000";
	if ($A != $B) echo "1";
	if ($A !== $B) echo "2";
/* Outputs 2 because A is not identical to B. */
?>
<br />
<?php
//Ex 4.16
	$a = 1; $b = 0; 
	echo ($a AND $b) . "<br />";
	echo ($a or $b) . "<br />";
	echo ($a XOR $b) . "<br />"; 
	echo !$a . "<br />";
	/* Null is outputed because AND needs both operands to be TRUE if it is going to returen a value of TRUE. */
?>
<br />

<?php
//Challenge
echo "Challenge <br />";

for ($count = 3 ; $count <= 10; ++$count)
	{
		echo "$count times 10 is " . $count * 10;
		echo "<br />";
	}

?>
</body>
</html>