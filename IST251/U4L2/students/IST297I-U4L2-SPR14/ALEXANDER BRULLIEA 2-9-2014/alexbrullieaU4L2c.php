<?php
$bank_balance = 1000; //Sets bank balance = to 1000
$savings = 0; //Sets savings = to 0
if ($bank_balance < 100) //If bank balance is less than 100, it runs the following
{
	$money += 1000;
	$bank_balance += $money;
}
elseif ($bank_balance > 200) //If bank balance is greater than 200, it runs the following
{
	$savings += 100;
	$bank_balance -= 100;
}
else //If the bank balance is between 100 and 200, it runs the following
{
	$savings += 50;
	$bank_balance -= 50;
}
echo "Your new bank balance is: $".$bank_balance."<br />"; //Outputs new bank balance and breaks to the next line
echo "Your new savings balance is: $".$savings; //Outputs new savings balance
?>
