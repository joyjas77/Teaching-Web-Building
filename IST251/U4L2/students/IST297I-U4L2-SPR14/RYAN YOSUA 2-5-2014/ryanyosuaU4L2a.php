<?php

//Doctype and lang
echo '<!DOCTYPE html>';
echo '<html lang="en">';

//echo html head
echo '
<head>
<meta charset=utf-8>
	<title>Expressions Lab</title>
</head>
';

//start body
echo '<body>';

echo'<h1> Unit 4 Lab 2: Expressions </h1>';

//4-1
echo '<h2> 4-1 </h2>';

//Demonstrates boolean expressions. A and D are true and have a value of 1. B and C are false and have a value of NULL.
echo "a: [" . (20 > 9) . "]<br>";
echo "b: [" . (5 == 6) . "]<br>";
echo "c: [" . (1 == 0) . "]<br>";
echo "d: [" . (1 == 1) . "]<br>";

//4-2
echo '<h2> 4-2 </h2>';
//Reinforces the values of true and false.
echo "a: [" . TRUE . "]<br>";
echo "b: [" . FALSE. "]<br>";

//4-3
echo '<h2> 4-3 </h2>';
//Demonstrates different types of literals.
$myname = "Brian";
$myage = 37;
echo "a: [" . 73 . "]<br>";      //Numeric literal
echo "b: [" . "Hello" . "]<br>"; //String Literal
echo "c: [" . FALSE . "]<br>";   //Constant Literal
echo "d: [" . $myname . "]<br>"; //Variable string literal
echo "e: [" . $myage . "]<br>";  //Variable numeric literal

//4-4
echo '<h2> 4-4 </h2>';
//Demonstrates an expression and a statement. Nothing will be echo'ed because the condition is not met.
$dayNumber = 32; //Assign the varible to the day of the year
$daysToNewYear = 366 - $dayNumber;     //Expression
if ($daysToNewYear < 30) {
	echo 'Not long now till new year'; //Statement
}

//4-5
echo '<h2> 4-5 </h2>';
//Demonstrates operators with the same precedence. Each expression will have the same vaule.
echo "Expression 1: " . ( 1 + 2 + 3 - 4 + 5 ) . "<br>";
echo "Expression 2: " . ( 2 - 4 + 5 + 3 + 1 ) . "<br>";
echo "Expression 3: " . ( 5 + 2 - 4 + 1 + 3 ) . "<br>";

//Challenge
echo '<h2> Challenge </h2>';

for($i = 1; $i <= 10; $i++) { //set i == 0, test the value of the variable, repeat and increment 10 times
	$result = $i * 2; //multiply the variable by a set number
	echo $result . '<br>'; //prints out the result

	//for loop increases the value of the variable by 1 automatically
}


//close body, html
echo '</body>';
echo '</html>';
?>