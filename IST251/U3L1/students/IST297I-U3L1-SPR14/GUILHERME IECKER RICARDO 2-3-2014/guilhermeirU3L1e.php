<html>
<head>
<title> Example 3-16. An alternative solution: passing $temp as an argument</title>
</head>
<body>
<?php
$temp = "The date is ";
echo longdate($temp, time());

function longdate($text, $timestamp)
{
  return $text . date ("l F jS Y", $timestamp);
}

?>
</body>
</html>