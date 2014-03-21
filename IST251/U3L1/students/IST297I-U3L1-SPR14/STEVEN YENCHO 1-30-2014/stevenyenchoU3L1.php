<?php include('header.php') //Pulls the header, to be honest nothing special, but includes opening tags which most close in the footer heh?>
        
    <?php 

    $counter =0;
    $paragraph = "<p>";
    $paraend = "</p>";
    $break = "<br/>";
    $string = "Hello World Lab 1, <~\CHALLENGE/~>";
    $string1 = "Hello World Lab 1, 3-10 ";
    $string2 = "Hello World Lab 1, 3-11 ";
    $string3 = "Hello World lab 1, 3-12 ";
    $string4 = "Hello World Lab 1, 3-17 ";
    $string5 = "Hello World Lab 1, 3-7 ";
    $array = array("One Thing", "Two Things", "Three Things","Four Things");
    echo $paragraph . $string . $break . $array[1] . $break . $paraend;
    echo $break;
    /*
    echo $string;
    echo $array[1];
    echo $paraend; */
//////////////////////////////////////////////
    echo $paragraph . $string1 . $break;
    $number = 98765 * 43210;
    echo substr($number, 3, 1) . $break . $paraend;
    echo $break;
///////////////////////////////////////////////
    echo $paragraph . $string2 . $break;
    $fib = "11.23581321";
    $spiral = 9;
    echo $fib * ($spiral * $spiral) . $break . $paraend;
    echo $break;
/////////////////////////////////////////////
    function longdate($timestamp)
    {
        return date("l F jS Y", $timestamp);   
    }
    echo $paragraph . $string3 . $break;
    echo "Today is :" . longdate(time()) . $break . $paraend;
    echo $break;
//////////////////////////////////////////////  
    function statictest()
    {
        $break = "<br/>";
        static $count = 0;
        echo $count . $break;
        $count++;
    }
    echo $paragraph . $string4 . $break;
    for($i = 0; $i < 5; $i++)
    {
        statictest();
    }
    echo $paraend;
    echo $break;

//////////////////////////////////////////////////

    echo $paragraph . $string5;
    $author = "Steven Yencho";
    $out = 
    "This is a headline
    
    The first line of the description.
    The second line of the description.
    The third line of the descrption.
    - Written by $author.";

    echo $break . $out;

    ?>
        
<?php include('footer.php')// Again just includes the footer stuff with closing tags, nothing special, but if you want these included or not leave a comment on my submission or something. ?>