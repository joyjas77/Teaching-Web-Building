<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Lab2 Kevin Kalish</title>
</head>

<body>

<?php
echo "Unit 4 Lab 2 Exercises<br><br>";

echo "Exercise 4-1 <br>";
echo "a: [" . (20 > 9) . "]<br />";
echo "b: [" . (5 == 6) . "]<br />";
echo "c: [" . (1 == 0) . "]<br />";
echo "d: [" . (1 == 1) . "]<br /><br>";

echo "Exercise 4-3 <br>";
$myname = "Brian";
$myage = 37;
echo "a: " . 73 . "<br />"; // Numeric literal
echo "b: " . "Hello" . "<br />"; // String literal
echo "c: " . FALSE . "<br />"; // Constant literal
echo "d: " . $myname . "<br />"; // Variable string literal
echo "e: " . $myage . "<br /><br>"; // Variable numeric literal


echo "Exercise 4-4 <br>";
// Might be smart of the example to say what $day_number equals or else the code doesn't work....
$day_number = 340;
$days_to_new_year = 366 - $day_number; // Expression
// if # of days to new year is less than 30 then print the statement
if ($days_to_new_year < 30){
	echo "Not long now till new year <br><br>"; // Statement
}



echo "Exercise 4-12 <br>";
// ALWAYS USE BRACKETS ON IF STATMENTS!!!!!!!! NEVER ONE LINE THEM!!!!!
$month = "March";
if ($month == "March"){ 
	echo "It's springtime <br><br>";
}

echo "Exercise 4-19 <br>";
// BRACKETS SHOULD BE AFTER CONDITION ON IF STATEMENT OR PEOPLE WON'T LIKE YOU!!!!
// Added by Greg then commented out: $bank_balance = 1;
if ($bank_balance < 100){
	$money = 1000;
	$bank_balance += $money;
	echo "Here is the Bank Balance: " . $bank_balance . "<br><br>";
}



// To test your skills, this lab has a challenge for you to include with your lab. Do the following: Set a variable that is an integer. 
//Create a PHP statement that tests the value of the variable, multiplies the variable by a set number, prints out the result, 
//increases the value of the variable by 1, and continues to do this until you have 10 lines displaying in your browser. 
//Be careful not to create an infinite loop!*

echo "Le Challange <br>";


for($i = 1;$i<=10;$i++){
	if($i>=0){
		$i = $i*1;
		echo $i ."<br>";
	}
}



?>

</body>

</html>
