<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="../../ist297i.css" rel="stylesheet" type="text/css">
	<title>IST297I</title>
</head>
<body>


<p class="directions"><b>Unit 4 Lab 2: Expressions Lab.</b> Make sure you are able to understand
	and code all of the examples in the unit for this week. Shown here are several of these examples in use. Read the comments!
	Remember, don't simply copy and paste the dowloaded examples. It's ok to use them as a guide while learning,
	but you want to type them in and understand the PHP.</p>
	
<p class="directions">Remember, you can learn a lot when you <a href="gregotooleU4L2.txt" title="View code" target="new">study the code</a>.
		
<p class="directions"><b>Example 4-1.</b> Four simple boolean expressions.</p>
	<?php
		echo "a: [" . (20 > 9) . "]<br />";
		echo "b: [" . (5 == 6) . "]<br />";
		echo "c: [" . (1 == 0) . "]<br />";
		echo "d: [" . (1 == 1) . "]<br />";
	?>

<br /> <!-- A simple html comment (I'm not inside a PHP parser right now so PHP comments don't work. 
	Putting in a line break to organize. --> 
	
	<!--  This is Example 4-2 --> 
<p class="directions"><b>Example 4-2.</b> Outputting the values of true and false.</p>
	<?php // test2.php
		echo "a: [" . TRUE  . "]<br />";
		echo "b: [" . FALSE . "]<br />";
	?>

<br /> <!--  This is Example 4-3 --> 
<p class="directions"><b>Example 4-3.</b> Five types of literals.</p>
	<?php
		$myname = "Greg";
		$myage = 40;
		echo "a: " . 73      . "<br />"; // Numeric literal
		echo "b: " . "Hello" . "<br />"; // String literal
		echo "c: " . FALSE   . "<br />"; // Constant literal
		echo "d: " . $myname . "<br />"; // Variable string literal
		echo "e: " . $myage  . "<br />"; // Variable numeric literal
	?>

<br /> <!--  This is Example 4-11 --> 
<p class="directions"><b>Example 4-11.</b> A multiple assignment statement. This is one of a few PHP expressions that have right to left associativity* See table 4-3 for more.</p>
	<?php
		$level = $score = $time = 0;
		echo "All three variables are set to: " . $level;
	?>

<br /><br /> <!--  This is Example 4-12 --> 
<p class="directions"><b>Example 4-12.</b> Assigning a value and testing for equality.</p>
	<?php
		$month = "January";
			if ($month == "January") echo "It's really cold outside!";
	?>

<br /><br /> <!-- A simple html comment (I'm not inside a PHP parser right now so PHP comments don't work. 
	Putting in a line break to organize. -->
<p class="directions"><b>Challenge Solution</b> Here is my solution to the challenge this week.</p> <!--  Challenge this week --> 

	<?php
		$count = 1;
		
		while ($count <= 10)
		{
			echo "$count times 14 is " . $count * 14 . "<br />";
			++$count;
		}
		//echo $count;
		if ($count == 11) echo "All done with the challenge because the variable is now equal to ". $count.".";
	?>


<p>&nbsp;</p>
</body>
</html>