<?php
//Example 4-1
echo "Example 4-1 <br />";
echo "a: [" . (20>9) . "]<br />";
echo "b: [" . (5==6) . "]<br />";
echo "c: [" . (1==0) . "]<br />";
echo "d: [" . (1==1) . "]<br />";

?>

<br />

<?php
//Example 4-2
echo "Example 4-2 <br />";
echo "a: [" . TRUE . "]<br />";
echo "b: [" . FALSE . "]<br />";
?>

<br />

<?php
//Example 4-3
echo "Example 4-3 <br />";
$name = "JB";
$age = "28";

echo "a: " . 73 . "<br />";
echo "b: " . 'Hello' . "<br />";
echo "c: " . FALSE . "<br />";
echo "d: " . $name . "<br />";
echo "e: " . $age . "<br />";
?>

<br />

<?php
//Example 4-12
echo "Example 4-12 <br />";
$month = "March";
if($month == "March")
	echo "It is springtime";
else
	echo "It is not springtime";
?>

<br />
<br />

<?php
//Example 4-13
echo "Example 4-13 <br />";
$a = "1000";
$b = "+1000";
if($a == $b)
	echo "1";
if($a === $b)
	echo "2";
?>

<br />
<br />

<?php
//Challenge
echo "Challenge <br />";
$a = 25;
if($a == 25)
	echo "The number is 25 <br />";
echo $a * 2 . "<br /><br />";
for($i=0; $i<10; $i++)
{
	$a++;
	echo $a . "<br />";
}
?>