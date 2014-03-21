<?php
echo "Example 3-4: <br/><br/>";
	$username = "Fred Smith";
	echo $username;
	echo "<br/>";
	$current_user = $username;
	echo $current_user;
	echo "<br/><br/><br/>";
	
echo "Example 3-8: Alternative multiline echo statement <br/><br/>";
	$author = "George R.R. Martin";
	
	echo <<<_END
	This is a Headline
	
	This is the first line.
	This is the second.
	-written by $author. <br/><br/><br/>
_END;

echo "Example 3-10 Automatic Conversion from a number to a string <br/><br/>";
	
	$number = 12345 * 67890;
	echo substr($number, 3, 1);
	echo "<br/><br/><br/>";
	
echo "Example 3-12: A simple funcion declaration <br/><br/>";
	function longdate($timestamp)
	{
		return date ("1 F jS Y", $timestamp);
	}
	echo longdate(time());
	echo "<br/><br/><br/>";

echo "Example 3-17: A function using a static variable <br/><br/>";
	function test()
	{
		static $count = 0;
		echo $count;
		$count ++;
	}
	echo test()."<br/>";
	echo test()."<br/>";
	echo test()."<br/><br/><br/>";

echo "Challenge: <br/>";			//Create an array in PHP with four (4) elements. Output the second element in the array which has an array index of one (1) in your Web browser.
	$cereals = array('frosted flakes', 'cocoa puffs', 'captain crunch', 'lucky charms' );
	echo $cereals[1]; 		//displays the cereal "cocoa puffs"
	echo "<br/><br/><br/>"


?>