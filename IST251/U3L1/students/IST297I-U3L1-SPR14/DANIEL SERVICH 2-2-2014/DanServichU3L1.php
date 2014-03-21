        <?php
//This is Ex. 3-1
        echo "This is ex. 3-1 <br/ >";
	echo "this has just occurred. Two wild comments are bickering.<br /> <br />";

//Ex. 3-2

	//I am a comment. There may be many like me, but I am special.
	/*
	Hey, you're stealing my thunder, Single Line Comment :(
        */

//EX. 3-3
        echo "this is ex. 3-3<br/>";
	$counter = 1;
	$book_title = "Learning PHP, MySQL, JavaScript, & CSS";
	$bookshelf = array("$book_title", "Big Java", "IPhone Application Development", "TCP/IP");
	echo "these are my variables for Ex. 3-3<br/><br/>"."$counter <br /> $book_title <br /> $bookshelf";

//Ex. 3-5

	$oxo = array(array('x',' ','o'),
                     array('o','o','x'),
                     array('x','o',' '));
	
	echo "<br/><br/><br/>This is ex 3-5, position [1][2] in the array <br/>". $oxo[1][2];


//Ex. 3-8

	$author = "Daniel Servich";
	echo <<<_END
	<br/><br/>
	This is a headline
	
	This is another line.
	And so is this one, I hope the formatting remains the same as it is in the php file.
	Written by $author.
	
	
	<br/><br/><br/>
_END;
	
//Ex. 3-10

	echo 'This is line ' . __LINE__ . ' of file ' . __FILE__ . "for ex 3-10";
	
//Ex. 3-12

	function longdate($timestamp)
	{
		return date("l F jS Y", $timestamp);
	}	
	
	echo "<br/>Finally, this is ex 3-12 <br/>" .longdate(time());
	
	        ?> 