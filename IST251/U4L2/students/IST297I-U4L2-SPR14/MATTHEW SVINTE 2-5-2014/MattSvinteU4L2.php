<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Unit 4 - Lab 2</title>
    </head>
    <body>
    	<?php
    	echo "Matt Svinte's Unit 4 - Lab 2";
    	?>
    
    	<br /></br>

        <?php
        // example 4-1
        echo "Example 4-1: <br />";
        // Each of the following check the condition to see if the condition is true or false:
        echo "a: [" . (20 > 9) . "] <br />";	// 20 is greater than 9 -- True, display 1
        echo "b: [" . (5 == 6) . "] <br />";	// 5 is not equal to 6 -- False
        echo "c: [" . (1 == 0) . "] <br />";	// 1 is not equal to 0 -- False
        echo "d: [" . (1 == 1) . "] <br />";	// 1 is equal to 1 -- True, display 1
        ?>
        
        <br />
        
        <?php
        // example 4-3
        echo "Example 4-3: <br />";
        $myname = "Brian"; 					// Sets variable myname equal to Brian
        $myage = 37;						// Sets variable myage equal to 37
        echo "a: " . 73      . " <br />"; 	// Numeric literal - displays A with number 73
        echo "b: " . "Hello" . " <br />"; 	// String literal - displays B with Hello
        echo "c: " . FALSE   . " <br />"; 	// Constant literal - doesn't display anything
        									// because there is nothing to return as output
        echo "d: " . $myname . " <br />"; 	// Variable string literal - displays d with name Brian
        echo "e: " . $myage  . " <br />"; 	// Variable numeric literal - displays e with age 37
        ?>
        
        <br />

		<?php
		// example 4-23
		echo "Example 4-23: <br />";
		$page = "Links";					// Sets varaible page equal to Link
		switch ($page)						// Allows the user to chose a page they would
		{									// like to view.  Depending the case they choose
											// displays the page they chose
			case "Home";
				echo "You selected Home";
				break;
			case "About";
				echo "You selected About";
				break;
			case "News";
				echo "You selected News";
				break;
			case "Login";
				echo "You selected Login";
				break;
			case "Links";
				echo "You selected Links";
				break;
		}
		?>
		
        <br /></br>

		<?php
		// example 4-29
		echo "Example 4-23: <br />";
		$count = 1;							// Does the times tables of 12
		while ($count <= 12)				// i.e. 1x12 = 12, 2x12 = 24
		{
			echo "$count times 12 is " . $count * 12 . "<br/>";
			++$count;						// Displays the output # times 12 is total
		}
		?>
		
		<br />
		
		<?php
		// example 4-37
		echo "Example 4-27: <br />";
		$a = 56;							// Sets variable a equal to 56 and b equal to 12
		$b = 12;
		$c = $a / $b;						// Divides a by b and displays the total as c
		echo $c;
		?>

        <br /></br>

		<?php
		// Challenge:Set a variable that is an integer. Create a PHP statement that tests 
		// the value of the variable, multiplies the variable by a set number, prints out 
		// the result, increases the value of the variable by 1, and continues to do this 
		// until you have 10 lines displaying in your browser.
		echo "Challenge: <br />";
		for($i = 1; $i <=10; ++$i)			// Multiplies the variable i by 10 then prints
		{									// the result and then increases the value by 1.
			echo "$i * 10 = ". $i *10;		// Does this 10 times
			echo "<br />";
		}
		?>

    </body>
</html>