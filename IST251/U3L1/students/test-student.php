<?php
	echo $_SERVER['PHP_SELF']
/* This is exercise is logical operator that is incremented. */
?>
	
<?php 
	$dancer = "Blueman";
	echo $dancer;
?>

<?php
echo test();

function test()
{
    static $count = 0;
    echo $count;
    $count++;
    echo '$count =' . $count;
}

?>
