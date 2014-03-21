<?php // a clean, easy include to connect me to the database.
 include 'connect.php'; 
 ?>
 
<?php
	// Often these are form values in $_POST
	$fname = "Phillipe";
	$lname = "Aumont";
	$number = (int) 48;
	$st_id = (int) 7;
	$home_id = (int) 7;
	
	// Escape all strings
	$fname = mysqli_real_escape_string($connection, $fname);
	$lname = mysqli_real_escape_string($connection, $lname);

	
	// 2. Perform database query
	$query  = "INSERT INTO 2013_players (";
	$query .= "  fname, lname, number, st_id, home_id";
	$query .= ") VALUES (";
	$query .= "  '{$fname}', '{$lname}', {$number}, {$st_id}, {$home_id}";
	$query .= ")";

	$result = mysqli_query($connection, $query);

	if ($result) {
		// Success
		// redirect_to("somepage.php");
		echo "<span class=\"congrats\">Congratulations!</span><br />You've added new data to the database.";
	} else {
		// Failure
		// $message = "Subject creation failed";
		die("Database query failed. " . mysqli_error($connection));
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Databases</title>
<link href="../../ist297i.css" rel="stylesheet" type="text/css">

	</head>
	<body>
	<p class="directions">Remember, you can learn a lot when you <a href="baseball_insert.txt" title="View code" target="new">study the code</a>. You can also <a href="index.php">go back to the lab</a>.</p>
		
        
    </body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>