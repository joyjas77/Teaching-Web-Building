<?php
$bank_balance = 0; //sets the starting bank balance at 0
if ($bank_balance < 100) //if the balance is less than 0, the following ensues
{
	$money = 1000; 
	$bank_balance += $money; //$money gets added to the current total of $bank_balance
	echo "new bank balance is: $".$bank_balance; //outputs the new balance total
}

?>
