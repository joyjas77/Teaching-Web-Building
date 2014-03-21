<!DOCTYPE html>
<html>
<head>
	<title>Unit 4 Lab 2</title>
</head>
<body>
<h2>Example 4-1</h2>
<?php
echo "<p>a: [" . (20>9) . "]</p>"; // true, outputs 1
echo "<p>b: [" . (5==6) . "]</p>"; // false, nothing as NULL
echo "<p>c: [" . (1==0) . "]</p>"; // false, nothing
echo "<p>d: [" . (1==1) . "]</p>"; // true, 1
?>

<h2>Example 4-3</h2>
<?php
$myname="Charlie";
$myage=20;
echo "<p>a: " . 73 . "</p>"; // numeric literal
echo "<p>b: " . "Hello" . "</p>"; // string literal
echo "<p>c: " . FALSE . "</p>"; // constant literal
echo "<p>d: " . $myname . "</p>"; // variable string literal
echo "<p>e: " . $myage . "</p>"; // variable numeric literal
?>

<h2>Example 4-16</h2>
<?php
$a=1; $b=0;
echo ($a AND $b) . "<br>"; // false, outputs nothing as NULL
echo ($a OR $b) . "<br>"; // true, 1
echo ($a XOR $b) . "<br>"; // true, 1
echo !$a; // false, nothing
?>

<h2>Example 4-26</h2>
<p><?php
$fuel=21;
echo $fuel<=1? "Fill tank now" : "There's enough fuel"; // if $fuel less than 1, output fill tank now, otherwise there's enough fuel
?></p>

<h2>Example 4-37</h2>
<p><?php
$a=56;
$b=12;
$c=$a/$b; // is a float due to division
echo (int)$c; // so we can force an int to output
?></p>

<h2>Challenge</h2>
<?php
$var=2; // set a variable that is an integer
for ($i=1; $i<=10; $i++) { // to ensure at most 10 passes/lines printed
	if ($var<2) {
		break; // if less than 2, break
	}
	$var*=7; // multiply by 7
	echo "<p>" . $var . "</p>"; // print result
	$var++; // increment
}
?>
</body>
</html>
