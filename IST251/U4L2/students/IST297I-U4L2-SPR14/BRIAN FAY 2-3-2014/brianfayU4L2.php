<!DOCTYPE html>
<html>
	<head>
		<title>
			Brian Fay Unit 4 Lab 2
		</title>
		<meta charset="utf-8">
	<style type="text/css">
		body{
			margin-left: 10%;
			font-family: Arial;
		}
		.description {
		font-size: 12pt;
		padding-right: 30%;
		color: #000;
		}
		.phpOutput {
		position: relative;
		top: 0px;
		left: 0px;
		background-color: #000000;
		border-style:double;
		border-width:5px;
		padding: 20px;
		margin-right: 30%;
		color: #8DDB8A;
		font-size: 16pt;
		}
	</style>
	</head>
	
	<body>
	<h1>
		Example 4-1:
	</h1>
	<p class="description">
		This example evaluates four boolean expressions: (20 > 9), (5==6),
		(1 == 0), and (1==1)
	</p>
	<div class="phpOutput">
		<?php
			echo "a: [" . (20 > 9) ."]<br />";
			echo "b: [" . (5 == 6) . "]<br />";
			echo "c: [" . (1 == 0) . "]<br />";
			echo "d: [" . (1 == 1) . "]<br />";
		?>
	</div>

	<h1>
		Example 4-2
	</h1>
	<p class="description">
		This example demonstrates the fact that "true" in PHP has the value 1, while "false" is 
		null.
	</p>
	<div class="phpOutput">
		<?php
			echo "a: [" . true . "]<br />";
			echo "b: [" . false . "]<br />";
		?>
	</div>

	<h1>
		Example 4-12
	</h1>
	<p class="description">
		This example shows an if statement, using a boolean expression 
		comparing a variable to a string literal.
	</p>
	<div class="phpOutput">
		<?php
			$month = "March";
			if ($month == "March") echo "It's springtime";
		?>
	</div>
	<h1>
		Example 4-13
	</h1>
	<p class="description">
		PHP is an interpreted language, and it can automatically 
		convert types depending on the context. Using "===" prevents this
		sautomatic conversion.
	</p>
	<div class="phpOutput">
		<?php
			$a = "1000";
			$b = "+1000";
			if ($a == $b) echo "1";
			if ($a === $b) echo "2";
		?>
	</div>
	<h1>
		Example 4-22
	</h1>
	<p class ="description">
		This example shows an if-elseif chain, which could be written as a 
		switch statement instead. (I've taken the liberty of setting the variable
		$page to "News.")
	</p>
	<div class="phpOutput">
		<?php
			$page = "News";
			if ($page == "Home") echo "You selected Home";
			if ($page == "About") echo "You selected About";
			if ($page == "News") echo "You selected News";
			if ($page == "Login") echo "You selected Login";
			if ($page == "Links") echo "You selected Links";
		?>
	</div>

	<h1>
		Example 4-23
	</h1>
	<p class ="description">
		The same idea, written as a switch statement.
	</p>
	<div class="phpOutput">
		<?php
			$page = "News";
			switch($page)
			{
				case "Home":
					echo "You selected Home";
					break;
				case "About":
					echo "You selected About";
					break;
				case "News":
					echo "You selected News";
					break;
				case "Login":
					echo "You selected Login";
					break;
				case "Links":
					echo "You selected Links";
					break;
				
			}
		?>
	</div>

	<h1>
		Challenge!
	</h1>
	<p class="description">
		Set a variable to an integer (3), create a PHP statement to test the value of the variable,
		multiply it by a set number, print out the result, increase the value of the variable by 1,
		and continue until there are 10 lines displaying in the browser.
	</p>
	<p class="phpOutput">
		<?php
			$theInt = 3;
			while($theInt < 13)
			{
				echo $theInt . " multiplied by 3 : " . ($theInt * 3) . "<br />";
				$theInt++;
			}
		?>
	</p>
	</body>
</html>