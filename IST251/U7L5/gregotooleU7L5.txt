<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="../../ist297i.css" rel="stylesheet" type="text/css">
	<title>IST297I</title>
    
<style type="text/css">
.coin {
    height: 50px;
    width: 50px;
    border-radius: 25px;
    background-color: gray;
	text-align: center;
	font-weight: bold;
	font-family: sans-serif;
	color: white;
	margin: 10px;
	display: inline-block;
	line-height: 50px;
	font-size: 20px;
}
</style>
</head>
<body>


<?php
	$unit = 7;
	$lab = 5;
	$topic = "Practical PHP";
?>

<p class="directions"><b><?php echo "Unit: $unit Lab: $lab: $topic"; ?></b> Make sure you are able to understand
	and code all of the examples in the unit for this week. Shown here are several of these examples in use. Read the comments!
	Remember, don't simply copy and paste the dowloaded examples. It's ok to use them as a guide while learning,
	but you want to type them in and understand the PHP.</p>
	
<p class="directions">Remember, you can learn a lot when you <a href="gregotooleU7L5.txt" title="View code" target="new">study the code</a>.
		
<p class="directions"><b>Example 7-1.</b> The printf(); function has many uses including precision setting (integers) and string padding (strings).</p>

<?php
	echo "<pre>"; // Enables viewing of the spaces
	
	// Pad to 15 spaces
	   printf("The result is $%15f\n", 123.42 / 12);
	
	// Pad to 15 spaces, fill with zeros
	   printf("The result is $%015f\n", 123.42 / 12);
	
	// Pad to 15 spaces, 2 decimal places precision
	   printf("The result is $%15.2f\n", 123.42 / 12);
	
	// Pad to 15 spaces, 2 decimal places precision, fill with zeros
	   printf("The result is $%015.2f\n", 123.42 / 12); 
	
	// Pad to 15 spaces, 2 decimal places precision, fill with # symbol
	   printf("The result is $%'#15.2f\n", 123.42 / 12); 
?>

	<!--  This is Example 7-2 --> 
<p class="directions"><b>Example 7-2.</b> String padding can get pretty detailed.</p>
<?php
	echo "<pre>"; // Enables viewing of the spaces
	
	$h = 'House';
	
	printf("[%s]\n",        $h); // Standard string output
	printf("[%10s]\n",      $h); // Right justify with spaces
	printf("[%-10s]\n",     $h); // Left justify with spaces
	printf("[%010s]\n",     $h); // Zero padding
	printf("[%'#10s]\n\n",  $h); // Use the custom padding character '#'
	
	$d = 'Doctor House';
	
	printf("[%10.8s]\n",    $d); // Right justify, cutoff of 8 characters
	printf("[%-10.6s]\n",   $d); // Left justify, cutoff of 6 characters
	printf("[%-'@10.6s]\n", $d); // Left justify, pad '@', cutoff 6 chars
?>

	<!--  This is Example 7-3 --> 
<p class="directions"><b>Example 7-3.</b> Checking the validity of a date.</p>
<?php
	$month = 10;	   // October (has 31 days)
	$day   = 31;   // 31st
	$year  = 2014; // 2014
	
	if (checkdate($month, $day, $year)) echo "Date is valid";
	else echo "Date is invalid";
?>

	
	<!--  This is Example 7-4 // Here is where permissions issue happen frequently. I had to give "Everyone" read & write permissions on the directory here to get this to execute properly and create the testfile.txt --> 
<p class="directions"><b>Example 7-4.</b> Create a file, write to it, close it, and print out success message.</p>
<?php // testfile.php
	$fh = fopen("testfile.txt", 'w') or ("Failed to create file"); //die(); has to go here like: die("Failed to create file") I removed the die because there are permissions issue on php cloud server and I don't want to fix them right now. same with next die statement.;
	$text = <<<_END
	Line 1
	Line 2
	Line 3
	
_END;
fwrite($fh, $text) or ("Could not write to file"); //die(); has to go here like: die("Could not...
fclose($fh);
echo "File 'testfile.txt' written successfully";
?>

	<!--  This is Example 7-15 --> 
<p class="directions"><b>Example 7-15.</b> Basic file upload interface.</p>
<?php // upload.php
echo <<<_END
<html><head><title>PHP Form Upload</title></head><body>
<form method='post' action='gregotooleU7L5.php' enctype='multipart/form-data'>
Select File: <input type='file' name='filename' size='10' />
<input type='submit' value='Upload' />
</form>
_END;

if ($_FILES)
{
	$name = $_FILES['filename']['name'];
	move_uploaded_file($_FILES['filename']['tmp_name'], $name);
	echo "Uploaded image '$name'<br /><img src='$name' />";
}

echo "</body></html>";

?>


<!-- <br /><br />  A simple html comment -->
<p class="directions"><b>Challenge Solution</b> Here is my solution to the challenge this week.</p> <!--  Challenge this week --> 
<p>We will keep flipping a coin as long as the result is heads!</p>
	<?php
	$flipCount = 0;
	do {
		$flip = rand(0,1);
		$flipCount ++;
		if ($flip){
			echo "<div class=\"coin\">H</div>" .$flip;
		}
		else {
			echo "<div class=\"coin\">T</div>" . $flip;
		}
	} while ($flip);
	$verb = "were";
	$last = "flips";
	if ($flipCount == 1) {
		$verb = "was";
		$last = "flip";
	}
	echo "<p>There {$verb} {$flipCount} {$last}!</p>";
	?>


<p>&nbsp;</p>
</body>
</html>