<?php 
include('header.php'); //Pulls header
?>

<?php
$break = '</br>'; //Line Break
$para = '<p>'; //Paragraph open tag
$paraend = '</p>'; //Paragraph close tag
$string = "Lab 2, <~\CHALLENGE/~>";
$string1 = " Lab 2, 4-37 ";
$string2 = " Lab 2, 4-36 ";
$string3 = " lab 2, 4-32 ";//Statements to print
$string4 = " Lab 2, 4-23 ";
$string5 = " Lab 2, 4-16 ";

///////////////////////////////CHALLENGE

echo $para . $string . $break;

$int = 1;

for($i = 0; $i < 10;$i++)//A for loop that goes 10 times
{
    $int *= 2; //Starts at 1, doubles to 2, then prints out and adds 1.
    echo $int . $break;
    $int++;
}

echo $paraend . $break;

////////////////////////////////4-37

echo $para . $string1;

$a = 74;
$b = 13;
$c = $a / $b;
echo $break . $c . " This is a floating point" . $break; //Demonstrative with another section of the exercise.
$c = (int) ($a / $b);
echo $c . " This is not a floating point, casted int";

echo $paraend . $break;

//////////////////////////////////4-36

echo $para . $string2 .$break;

$d = 11;

while($d > -10) //While statement practice
{
    $d--;
    if($d == 0) continue; //Stops the dividing by 0 error thing
    echo (10/$d) . $break;
}


echo $paraend . $break;

////////////////////////////////////4-32


echo $para . $string3 .$break;

$counter = 0; //Lets start at 0
do{ //I already practiced a for loop earlier and i like curly braces
    echo "$counter times 12 is " . $counter * 12 . $break;    
}while (++$counter <= 13);


echo $paraend . $break;

//////////////////////////////////////4-23
echo $para . $string4 .$break;

$getCurrentPage = "Lab 2"; //If i wasn't lazy i would make this a function returning a string
    
switch($getCurrentPage)
{
    case "Home":
        echo "Home Selected";
        break;
    case "Lab 1":
        echo "Lab 1 Selected"; // Im going to make this about my website for these labs
        break;
    case "Lab 2":
        echo "Lab 2 Selected";
        break;
    case "Lab 3":
        echo "Lab 3 Selected";
        break;
    case "Lab 4":
        echo "Lab 4 Selected";
        break;
}
    
echo $paraend . $break;    
////////////////////////////////////// 4-16   

echo $para . $string5;   
    
$a = (56 > 21); $b =(21 > 56); //Lets mix this one up with some logic statements

echo ($a AND $b) . $break;
echo ($a or $b) . $break; //Honestly, this doesn't print much out but 2 "1"'s but relates to the example
echo ($a XOR $b) . $break;
echo !$a . $break;
    

echo $paraend . $break;
    
////////////////////////////////End 
?>

<?php
include('footer.php');//Pulls footer
?>