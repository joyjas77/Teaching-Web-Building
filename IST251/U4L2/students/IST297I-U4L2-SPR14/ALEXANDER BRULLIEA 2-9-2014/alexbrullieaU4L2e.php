<?php
//challenge
$int_var = 13; //I set my variable equal to 13
$count = 0; //sets count = to 0
while( ++$int_var <= 23) //The variable increments by 1 each time until it is equal to the value 23
{
    ++$count; // increments by 1 each time the loop runs
    echo "Line ".$count.": 2 times ". $int_var." is ".$int_var * 2,"<br />"; //multiplies the variable by 2 each time the loop runs
}