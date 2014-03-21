<!DOCTYPE HTML>
<head>
    <title>Brian Soltis - U3L1</title>
</head>
<body>
    <?php
        // Example 3-5
        $oxo = array(array('x', '', 'o'),
                      array('o', 'o', 'x'),
                      array('x', 'o', ''));
            
    ?>
    
    <?php
        // Example 3-10
        $number = 12345 * 67890;
        echo substr($number, 3,  1);
    ?>
    
    <?php
        // Example 3-12
        function longdate($timestamp) {
            return date("l F js Y", $timestamp);
        }
    ?>
    
    <?php
        // Example 3-17
        function test() {
            static $count = 0;
            echo $count;
            $count++;
        }
    ?>
    
    <?php
        // Example 3-2
        /* This is a section
        of multiline comments
        that will not be interpreted */
        
    ?>
    
    <?php
        // CHALLENGE
        $challenge = array('red', 'blue', 'green', 'yellow');
        echo $challenge[1];
    ?>
    
    
</body>
</html>