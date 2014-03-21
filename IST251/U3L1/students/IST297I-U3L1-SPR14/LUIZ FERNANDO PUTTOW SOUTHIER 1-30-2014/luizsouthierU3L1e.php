<html>
<head>
<title>Example 4</title>
</head>

<body>
<?php

function longdate($timestamp)
{
return date("l F jS Y", $timestamp);
}
echo longdate(time());


?>
</body>
</html>