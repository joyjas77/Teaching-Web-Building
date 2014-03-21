<html>
<head>
<title>Unit 3 Lab 1</title>
</head>
<body>

<?php
	//Example 3-1
	echo "<p>Hello World";
?>
<br />
<?php
	//Example 3-2
	/* This is a multi-line
	comment test. This proves that I can
	do multi-line comments */
?>
<br />
<?php
	//Example 3-3
	$counter = 1;
	$string = "Hello";
	$array = array("One", "Two", "Three");
?>
<br />
<?php
	//Example 3-4
	$user = "John Smith";
	echo $user;
	$current_user = $user;
	echo "<br />";
	echo $current_user;
?>
<br />
<?php
	//Example 3-5
	$ticTacToe = array(
						array('x','','o'),
						array('o','o','x'),
						array('x','o','x')
						);
?>
<br />
<?php
	//Challenge
	$elements = array('Fire','Wind','Water','Earth');
	echo $elements[1];
?>

<body>