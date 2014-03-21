<?php

	/*
		This is Uit 4 Lab 2 : Expressions by Daniel Servich
	*/

    echo "<h3> Ex. 4-1 </h3> ";				//This begins Ex. 4-1
    echo "a: [" . ( 20 > 9 ) . "]<br />";
    echo "b: [" . ( 5 == 6 ) . "]<br />";
    echo "c: [" . ( 1 == 0 ) . "]<br />";
    echo "d: [" . ( 1 == 1 ) . "]<br />";
    
    echo "<br />";
    
    echo "<h3> Ex. 4-2 </h3>";				//This begins Ex. 4-2
    echo "a: [" . true . "]<br />";
    echo "b: [" . false . "]<br />";
    
    echo "<br />";
    
    echo "<h3> Ex. 4-3 </h3>";				//This begins Ex. 4-3
    $myname = "Dan";
    $myage = 19;
    echo "a: " . 73 . "<br />";         	//Numeric Literal
    echo "b: " . "Hello" . "<br />";    	//String Literal
    echo "c: " . false . "<br />";      	//Constant Literal
    echo "d: " . $myname . "<br />";    	//Variable String Literal
    echo "e: " . $myage . "<br />";     	//Variable Numeric Literal
    
    echo "<br />";
    
    echo "<h3> Ex. 4-23 </h3>";				//This begins Ex. 4-23
    $page = "News";
    
    switch($page)							//Begin switch statement
    {
        case "Home":
            echo "You Selected Home";
            break;
        case "About":
            echo "You Selected About";
            break;
        case "News":
            echo "You Selected News";
            break;
        case "Login":
            echo "You Selected Login";
            break;
        case "Links":
            echo "You Selected Links";
            break;
        //This is Ex. 4 - 24, but needed to be included in this problem, too.
        default: 
            echo "Unrecognized Selection";
            break;
    }
    
    echo "<br />";
    
    echo "<h3>Ex. 4-36 </h3>";				 //This begins Ex. 4-36
    
    $j = 11;
    
    while($j-- > -10)
    {
        if ($j ==0) continue;           	 //This avoids dividing by zero and continues to the next iteration of the loop
        echo "$j: " . (10 / $j) . "<br />";
    }
    
    echo "<br />";
    
    echo "<h3> Challenge </h3>";			 //This begins the Challenge
    
    $i = 0;                                  //This is my integer variable
    $constant = 3;                           //This is my set number
    
    while($i++<10)                           //This checks if my integer is less than ten, if it is, then it increases the value by one then executes the code inside the braces.
    {
        $val = $i * $constant;               //My integer times my constant.
        echo "$val <br />";                  //Prints out my new value
    }
?>
