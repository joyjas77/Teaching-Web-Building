<!DOCTYPE html>
<html>
<head>
<title>Unit 4 Lab 2 - Expressions</title>

</head>
<body>
	<?php
		// The five examples from the book
		echo "I had misplaced my book, I would have thought I would have found it by now.  I will be getting another one tomorrow... <br /><br />";
		
		
		// Challenge
		$testVariable = 7; // The test variable for this challenge.
		$multiVariable = 2; // The variable to multiply the test variable by.
		$numOfLines = 0; // Integer to keep track of the number of lines being printed.
		while ($numOfLines < 10){ // This will loop until there are 10 lines.
			$modifiedVariable = $testVariable * $multiVariable;  // Multiplies the test variable by a set number.
			echo "$modifiedVariable <br />";  // Prints the result of the multiplication.
			$testVariable++;  // Increments the test variable by one.
			$numOfLines++;  // Increments the number of lines used.
		}
	?>
</body>
</html>