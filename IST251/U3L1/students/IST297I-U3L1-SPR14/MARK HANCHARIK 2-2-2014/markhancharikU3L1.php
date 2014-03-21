<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Lab Three - Hello World</title>
    </head>
    <body>
	<a href="index.php" title="mah537 IST297I Home Page" >mah537 IST297I Home Page</a>
	<br />
	<br />
	LAB THREE    <a href="lab3.txt" title="View code" target="new">(Code .txt file)</a>
	
	<br />
	<br />EXAMPLE 3-1
	<br />(outputting to the browser screen) <!--
	<br />I have adjusted the output to include a super global variable from page 66
	<br />I have also included a test for an empty string, which does work
	<br / >however, it fires the error message: "Notice: Undefined index: HTTP_REFERER in /pass/home/6/m/mah537/www/IST297I/lab3.php on line *something*"<br />
   --> <br /> 
   <br />
	 <?php
        $last_page = $_SERVER['HTTP_REFERER'];
		if ($last_page == "") $last_page = " typing in the URL ";
        echo "Hey, this is cool, You got here from " . $last_page;
        ?>
		
		
		
		
		<br />
<br />EXAMPLE 3-10
<br />(converting a number to a string, and then returning a character from that string) <!--
<br />I have changed "echo substr($number, 3, 1);" to "echo substr($number, 5, 3);
<br />to return the characters numbered 6, 7, and 8
-->
<br /><br />
<?php
$number = 74583 * 95482;
echo substr($number, 5, 3) . " are the sixth, seventh, and eighth numbers in " . $number;
?>

<br />
<br />EXAMPLE 3-11
<br />(PHP is a loosely typed language)
<!--
<br />In this example, the variable "pi" is declared as a string, using quotation marks, but can then be manipulated as if it were a double<br />
-->
<br /><br />
<?php
$pi = "3.1415927";
$radius = 5;
$area = $pi * ($radius * $radius);
echo "The area of a circle with a radius of " . $radius . " is " .  $area;
?>
	<br />	
	<br />EXAMPLE 3-16
<br />(Scope of a variable in PHP functions)
<!--
<br />I'm using this example, because of all of the examples that work,
<br />I'm most comfortable with this logic of passing a variable to a function's parameters
<br /> -->
<br />
<br />
<?php
$variable_name = "Today is ";
echo "Here is the output of the text_and_date() function: " . text_and_date($variable_name, time());

function text_and_date($some_text, $timestamp)
{
	return $some_text . date("l F jS Y", $timestamp); // I'm not certain about this formatting within the date() function, straight from the book
}
?>
<br />
<br />EXAMPLE 3-17
<br />(A function using a static variable)
<!-- <br />This code outputs the functions before the strings, haven't figured out why yet...<br /> -->
<br />
<?php
function test()
{
    static $counter = 1;
    echo $counter;
    $counter++;
}

//echo "The counter starts at " . test() . "The next time the test() function is called, the counter is at " . test() . ". Then with each call to the function, the counter goes up one: " . test() . ", " .  test() . ", " . test() . ", " . test() . ", and so on...";
//echo "<br />Using print doesn't help:<br />";
//print( "The counter starts at " . test() . "The next time the test() function is called, the counter is at " . test() . ". Then with each call to the function, the counter goes up one: " . test() . ", " .  test() . ", " . test() . ", " . test() . ", and so on...");

echo "<br />this just prints out the function \"test()\" ten times:";
for ($i=0;$i<10;$i++){
	echo "<br />";
	echo test();
	
	}
?>
	<br />	
	<br />THE CHALLENGE
	<br />(return the second element of an array)<br />	
	<br />
	<?php
	$emotocons = array(":(",":D",":|",":P");
	$some_random_number = rand(0,3); // hard-wired to be three, need to find the ".length" (in java) operator for PHP
	$the_element_number = $some_random_number + 1;
	echo "The second emotocon is:  &nbsp;&nbsp;  " . $emotocons[1];
	// echo "<br />But I'm not sure how to print out the entire array yet!  " . $emotocons[3];
	echo "<br />Here is element # " . $the_element_number . "    (which is array[" . $some_random_number . "])  &nbsp;&nbsp; " . $emotocons[$some_random_number];
	?>
		
		
	
		
    </body>
</html>
