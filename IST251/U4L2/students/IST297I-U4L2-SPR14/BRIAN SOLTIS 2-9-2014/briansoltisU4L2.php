<!DOCTYPE HTML>
<head>
    <title>Brian Soltis - U4L2</title>
</head>
<body>
    <h3>U4L2</h3>
    <p>Example 4-1</p>
    
    <?php
        // Example 4-1
        echo "a: [" . (20 > 9) . "]<br />";
        echo "b: [" . (5 == 6) . "]<br />";
        echo "c: [" . (1 == 0) . "]<br />";
        echo "d: [" . (1 == 1) . "]<br />";
    ?>
    
    <br />
    <p>Example 4-3</p>
    
    <?php
        // Example 4-3
        $myname = "Brian";
        $myage = 21;
        echo "a: " . 73     . "<br />"; //Numeric literal
        echo "b: " . "Hello". "<br />"; //Numeric literal
        echo "c: " . FALSE  . "<br />"; //Numeric literal
        echo "d: " . $myname. "<br />"; //Numeric literal
        echo "e: " . $myage . "<br />"; //Numeric literal
    ?>
    
    <br />
    <p>Example 4-13</p>
    
    <?php
        // Example 4-13
        $a = "1000";
        $b = "+1000";
        if ($a == $b) echo "1";
        if ($a === $b) echo "2";
    ?>
    
    <br /><br />
    <p>Example 4-23</p>
    
    <?php
        // Example 4-23
        $page = "News";
        switch ($page)
        {
            case "Home":
                echo "You selected Home";
                break;
            case "About":
                echo "You selected About";
                break;
            case "News":
                echo "You selected News";
                break;
            case "Login":
                echo "You selected Login";
                break;
            case "Links":
                echo "You selected Links";
                break;
        }
    ?>
    
    <br /><br />
    <p>Example 4-37</p>
    
    <?php
        // Example 4-37
        $a = 56;
        $b = 12;
        $c = $a / $b;
        echo $c;
    ?>
    
    <br /><br />
    <p>Challenge</p>
    
    <?php
        // Challenge
        // I used a for loop because it is easy to determine how many
        // times I want to loop through
        $int = 5;
        if (is_int($int)) {
            echo ($int * 4);
            echo "<br />";
            for($i = 1; $i <= 10; $i++) {
                $int++;
                echo $int;
                echo "<br />";
            }
        }
    ?>
    
</body>    
</html>