<html>
<head>
<title> Example 3-13. An expanded version of the longdate function</title>
</head>
<body>
<?php
function longdate($timestamp)
{
  $temp = date("l F jS Y", $timestamp);
  return "The date is $temp";;
}
echo longdate(time());
?>
</body>
</html>