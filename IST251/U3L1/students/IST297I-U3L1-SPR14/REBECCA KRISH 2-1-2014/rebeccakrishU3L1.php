<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>IST 297I | Unit 3 Lab 1</title>
</head>

<body>

<h1>IST 297I | Unit 3 Lab 1</h1>
<p>By: Rebecca Krish</p>
</br>

<h2>Exercise 3-4</h2>
<?php
$username = "Fred Smith";
echo $username;
echo "<br />";
$current_user = $username;
echo $current_user;
?>
</br>

<h2>Exercise 3-5</h2>
<?php
$oxo = array(
	array('x', '', 'o'), 
	array('o', 'o', 'x'), 
	array('x', 'o', '' ),
);

echo $oxo[1][2];
?>
</br>

<h2>Exercise 3-9</h2>
<?php
$author = "Alfred E Newman";
$out = <<<_END
This is a Headline

This is the first line.
This is the second.
- Written by $author.
_END;
echo $out;
?>
</br>

<h2>Exercise 3-11</h2>
<?php
$pi = "3.1415927";
$radius = 5;
echo $pi * ($radius * $radius);
?>
</br>

<h2>Exercise 3-15</h2>
<?php
$temp = "The date is ";
echo longdate($temp, time());

function longdate($text, $timestamp) {
  return $text . date("l F jS Y", $timestamp);
}
?>
</br>

<h2>Challenge Mode</h2>
<?php
$sentence = array("We", "are", "the", "champions");
echo $sentence[1];
?>

</body>

</html>