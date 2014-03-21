<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Unit 3 - Lab 1</title>
    </head>
    <body>
        <?php
        // exercise 3-1
        echo "Hello World!";
        ?>
        
        <br /></br>
        
        <?php 
        // exercise 3-4
        $username = "Fred Smith";
        echo $username;
        echo "<br />";
        $current_user = $username;
        echo $current_user;
        ?>
        
        <br /></br>
        
        <?php
		// exercise 3-7
		$author = "Alfred E Newman";
		
		echo "This is a Headline
		
		This is the first line.
		This is the second.
		Written by $author.";
        ?>
	
	    <br /></br>
	    
	    <?php
	    // exercise 3-10
	    $number = 12345 * 67890;
	    echo substr($number, 3, 1);
	    ?>
	    
	   	<br /></br>


		<?php
		// exercise 3-11
		$pi = "3.1415927";
		$radius = 5;
		echo $pi * ($radius * $radius);
		?>
		
		<br /></br>
		
		<?php
		function longdate($timestamp)
		{
			return date("l F jS Y", $timestamp);
		}
		?>

        
    </body>
</html>