<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab One</title>
</head>

<body>
<?php 
	//Ex 3.1
	echo "Hello world!"; 
	echo "Super Bowl";
	
	//Ex 3.2
	/* This is a commment, and it reminds of of CSS */ 
	
	//Ex 3.3
	$mycounter = 1;
	$mystring = "This is a string!"; 
	$myarray = array("One", "Two", "Three", "Four"); 
	echo $myarray[1];
	
	//Ex 3.4 
	$username = "Tyler Bartos"; 
	echo $username; 
	echo "<br />"; 
	$current_user = $username;
	echo $current_user; 
	
	//Ex 3.5 
	$oxo = array(array('x','','o'),
				 array('o','o','x'),
				 array('x','o',''));
	echo $oxo[1][2];
	
	//Ex. 3.6 
	$author = "Alfred E Newman"; 
	
	echo "This is a Headline
	
	This is the first line. 
	This is the second line.
	Written by $author."; 
	
	//Ex 3.7 
	$author2 = "Tyler Bartos"; 
	
	$text = "This is a Headline
	
	This is the first line.
	This is the second line.
	Written by $author2.";
	
	echo $text;
	
	//Ex 3.12 
	function longdate($timestamp) 
	{
		return date("1 F jS Y", $timestamp);
	}
	echo longdate(time() - 17 * 24 * 60 * 60 ); 
	/* Date 17 days ago */
 
	
?>
</body>
</html>