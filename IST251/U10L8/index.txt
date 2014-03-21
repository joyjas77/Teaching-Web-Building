<?php // a clean, easy include to connect me to the database.
 include 'connect.php'; 
 ?>
<?php
	// 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM 2013_players";
	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if (!$result) {
		die("Database query failed.");
	}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="../../ist297i.css" rel="stylesheet" type="text/css">
	<title>IST297I</title>
</head>
<body>


<?php
	$unit = 10;
	$lab = 8;
	$topic = "MySQL with PHP";
?>

<p class="directions"><b><?php echo "Unit: $unit Lab: $lab: $topic"; ?></b> Make sure you are able to understand
	and code all of the examples in the unit for this week. Shown here are several of these examples in use. Read the comments!
	Remember, don't simply copy and paste the dowloaded examples. It's ok to use them as a guide while learning,
	but you want to type them in and understand the PHP.</p>
	
<p class="directions">Remember, you can learn a lot when you <a href="index.txt" title="View code" target="new">study the code</a>.
		


<br /><br /> <!-- A simple html comment -->
<p class="directions"><b>Challenge Solution</b> Here is my solution to the challenge this week.</p> <!--  Challenge this week --> 

<p class="directions">NOTE: Listed below is the output from my 2013_players table in my baseball database. The program to add the players is here: <a href="baseball_insert.php" title="Add a player">/baseball_insert.php</a>. You can see that each time you browse <a href="baseball_insert.php" title="Add a player">/baseball_insert.php</a> it adds the same player. This is simply because the new player record is hard-coded into the program. But next unit, we will build a web form to edit ("CRUD") this table in a way that allows us to have a good user experience.</p>

<ul>
	<?php
    // 3. Use returned data (if any)
        while($subject = mysqli_fetch_assoc($result)) {
    // output data from each row
    ?>
    <li><?php echo $subject["fname"] . " " . $subject["lname"]; ?></li>
    <?php
        }
    ?>
</ul>

<!--- START: same result using mysqli_fetch_row() ==== commented out ====
<ul>
	<?php
    // 3. Use returned data (if any)
        // while($subject = mysqli_fetch_row($result)) {
    // output data from each row
    ?>
    <li><?php // echo $subject["1"] . " " . $subject["2"]; ?></li>
    <?php
       // }
    ?>
</ul>
==== END: same result using mysqli_fetch_row() --->

		
<?php
// 4. Release returned data
	mysqli_free_result($result);
?>

<p>&nbsp;</p>
</body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>