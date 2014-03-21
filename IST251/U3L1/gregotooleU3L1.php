<!DOCTYPE html>
<html>
<head>
<link href="../../ist297i.css" rel="stylesheet" type="text/css">
	<title>Unit 3 Lab - Hello World!</title>
</head>
<body>
	<p class="directions">Hello World! Lab. Make sure you are able to understand
	and code all of the examples in Chapter 3 of the text for this week. Shown here are Examples 3-1, 3-2, 3-3, 3-4, and 3-5. Read the comments!
	Remember, don't simply copy and paste the dowloaded examples. It's ok to use them as a guide while learning,
	but you want to type them in and understand the PHP.</p>
	
	<p class="directions">This is example 3-1,2 from the text: a simple "Hello world!" echo and a multiline comment. Of course you can't see the comments until you <a href="gregotooleU3L1.txt" title="View code" target="new">study the code</a>.</p>
	
	<?php
		echo "Hello world!"; // Example 3-1
		/*
		 * Example 3-2
		* This is a section of multi-line comments
		* which will not be interpreted.
		* This is handy for writing a good amount of detail.
		*/
	?>
	

	<br /> <!-- A simple html comment (I'm not inside a PHP parser right now so PHP comments don't work. 
	Putting in a line break to organize. -->
	
	<p class="directions">This is example 3-3 from the text, page 45, 3 different types of variable assignment. You can't see much unless you <a href="gregotooleU3L1.txt" title="View code" target="new">view the code</a>.</p>
	
	<?php //example 3-3 from the text, page 45, 3 different types of variable assignment
		$mycounter = 1;
		$mystring = "What's up?";
		$myarray = array("one", "two", "three");
	?>
	
	
	<br />
	
	<p class="directions">This is an example of a PHP
		program using variables. This is the example code (Example 3-4) from p. 47 in the
		text book.</p>
		
	<?php
	// test1.php from Chapter 3 in the book
	$username = "Fred Smith"; // establish a variable and give it a value
	echo $username; // display the value for the variable
	echo "<br />"; // use a line break here, must "print" it to render the html or errors out
	$current_user = $username; // establish a second variable, giving it the value of the first variable
	echo $current_user; // display the value of the second variable
	?>


	<br />
	<p class="directions">This is example 3-5 on page 49... Not very exciting until you <a href="gregotooleU3L1.txt" title="View code" target="new">study the code</a>.</p>
	<?php
		/* 
	* This is example 3-5 on page 49 in the text
		Defining a 2-dimensional array...
	*/
		$oxo = array(array('x', '','o'), array('o', 'o','x'), array('x', 'o',''));
		echo $oxo[1][2];
		
	?>

	<br />
	<p class="directions">Challenge: This is one way of completing the challenge this week. <a href="gregotooleU3L1.txt" title="View code" target="new">study the code</a>.</p>

	<?php
		$challenge = array('Rangers', 'Flyers', 'Capitals', 'Islanders');
		echo $challenge[1];
	?>
	


	<br />
	<p class="directions">
		<a href="gregotooleU3L1.txt" title="View code" target="new">Get the code</a>
		(Remember: this is only a .txt version. You should save this, replace
		the .txt file type with .php and open it in your Eclipse editor to
		take advantage of the color coding and hints that make it easier to
		work with the code.)
	</p>
</body>
</html>
