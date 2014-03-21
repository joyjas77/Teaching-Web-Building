<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>IST297I</title>
	</head>
	<body>
		<h3>PHP Lesson 3: Dynamic Time and Date in Custom Formats</h3>
		<p>In PHP write the following statements in two (2) ways:</p>
		<p><b>Format 1:</b></p>
		<?php echo '<p>Hello World!</p>'; ?>
		<p>It's <?php echo date("H:i:s - m/d/y", time()); ?></p>

		<p><b>Format 2:</b></p>
		<p>Hello World! It's <?php echo date("h:i A", time()); ?> on <?php echo date("D M j, Y", time()); ?></p>

		<a href="index.php" title="Home" target="">Home</a>

		</body>
</html>


