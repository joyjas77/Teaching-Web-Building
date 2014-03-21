<html>
<head>
<title>Rob Cordero - IST 297i Unit 3 Lab 1</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<style type="text/css">
* {
    margin: 0;
    padding; 0;
}
html {
    overflow-y: scroll;
}
body {
    font-family: calibri, arial;
    font-size: 12px;
}
div.wrapper {
    width: 80%;
    margin: 0 auto;
    padding: 20px 10px;
    background: #eee;
}
div.exercise {
    background: #ccc;
    padding: 20px;
    border-left: 3px dotted black;
}
div.code {
    font-family: "Courier New";
    white-space: pre;
    background: #fff;
    padding: 20px;
    margin: 10px 0;
}
div.php {
    background: #9be;
    padding: 20px;
    margin: 10px 0;
}
hr {
    margin: 10px 0px 20px 0px;
}
input {
    margin-bottom: 10px;
}
p {
    margin-bottom: 5px;
}
p.title64 {
    font-family: arial;
    font-size: 64px;
}
p.title24 {
    font-size: 24px;
}
p.center {
    text-align: center;
}
.center {
    margin: 0 auto;
}
</style>
</head>
<body>
<div class="wrapper">
    <p class="title64">IST 297i - Unit 3 Lab 1</p>
    <p>Rob Cordero</p>
    <hr />
    <!-- Challenge -->
    <p class="title24">Challenge</p>
    <p>Create an array with four elements and output the second element in the array (index of one)</p>
    <div class="exercise">
        <p>Raw Code</p>
        <div class="code">
&lt?php
    $arr = array("zero", "one", "two", "three");
    echo $arr[1];
?&gt
        </div>
        <p>PHP Output</p>
        <div class="php">
            <?php
                $arr = array("zero", "one", "two", "three");
                echo $arr[1];
            ?>
        </div>
    </div>
    <hr />
    <!-- Example 3-4 -->
    <input type="button" value="Example 3-4" onclick="$('#ex3-4').slideToggle()" />
    <div id="ex3-4" class="exercise" style="display:none;">
        <p>Raw Code</p>
        <div class="code">
&lt?php
    $username = "Fred Smith";
    echo $username;
    echo "<br />";
    $current_user = $username;
    echo $current_user;
?&gt
        </div>
        <p>PHP Output</p>
        <div class="php">
            <?php
                $username = "Fred Smith";
                echo $username;
                echo "<br />";
                $current_user = $username;
                echo $current_user;
            ?>
        </div>
    </div>
    <hr />
    <!-- Example 3-5 -->
    <input type="button" value="Example 3-5" onclick="$('#ex3-5').slideToggle()" />
    <div id="ex3-5" class="exercise" style="display:none;">
        <p>Raw Code</p>
        <div class="code">
&lt?php
    $oxo = array(array('x',  '', 'o'),
                 array('o', 'o', 'x'),
                 array('x', 'o',  ''));
    echo "&lttable border=\"1\"&gt";
    echo "&lttr&gt&lttd&gt" . $oxo[0][0] . "&lt/td&gt&lttd&gt" . $oxo[0][1] . "&lt/td&gt&lttd&gt" . $oxo[0][2] . "&lt/td&gt&lt/tr&gt";
    echo "&lttr&gt&lttd&gt" . $oxo[1][0] . "&lt/td&gt&lttd&gt" . $oxo[1][1] . "&lt/td&gt&lttd&gt" . $oxo[1][2] . "&lt/td&gt&lt/tr&gt";
    echo "&lttr&gt&lttd&gt" . $oxo[2][0] . "&lt/td&gt&lttd&gt" . $oxo[2][1] . "&lt/td&gt&lttd&gt" . $oxo[2][2] . "&lt/td&gt&lt/tr&gt";
    echo "&lt/table&gt";
?&gt
        </div>
        <p>PHP Output</p>
        <div class="php">
            <?php
                $oxo = array(array('x',  '', 'o'),
                             array('o', 'o', 'x'),
                             array('x', 'o',  ''));
                echo "<table border=\"1\">";
                echo "<tr><td>" . $oxo[0][0] . "</td><td>" . $oxo[0][1] . "</td><td>" . $oxo[0][2] . "</td></tr>";
                echo "<tr><td>" . $oxo[1][0] . "</td><td>" . $oxo[1][1] . "</td><td>" . $oxo[1][2] . "</td></tr>";
                echo "<tr><td>" . $oxo[2][0] . "</td><td>" . $oxo[2][1] . "</td><td>" . $oxo[2][2] . "</td></tr>";
                echo "</table>";
            ?>
        </div>
    </div>
    <hr />
    <!-- Exercise 3-10 -->
    <input type="button" value="Example 3-10" onclick="$('#ex3-10').slideToggle()" />
    <div id="ex3-10" class="exercise" style="display:none;">
        <p>Raw Code</p>
        <div class="code">
&lt?php
    $number = 12345 * 67890;
    echo substr($number, 3, 1);
?&gt
        </div>
        <p>PHP Output</p>
        <div class="php">
            <?php
                $number = 12345 * 67890;
                echo substr($number, 3, 1);
            ?>
        </div>
    </div>
    <hr />
    <!-- Exercise 3-11 -->
    <input type="button" value="Example 3-11" onclick="$('#ex3-11').slideToggle()" />
    <div id="ex3-11" class="exercise" style="display:none;">
        <p>Raw Code</p>
        <div class="code">
&lt?php
    $pi = "3.1415927";
    $radius = 5;
    echo $pi * ($radius * $radius);
?&gt
        </div>
        <p>PHP Output</p>
        <div class="php">
            <?php
                $pi = "3.1415927";
                $radius = 5;
                echo $pi * ($radius * $radius);
            ?>
        </div>
    </div>
    <hr />
    <!-- Example 3-17 -->
    <input type="button" value="Example 3-17" onclick="$('#ex3-17').slideToggle()" />
    <div id="ex3-17" class="exercise" style="display:none;">
        <p>Raw Code</p>
        <div class="code">
&lt?php
    function test() {
        static $count = 0;
        echo $count;
    }
    // For the sake of example, I have added a call
    test();
?&gt
        </div>
        <p>PHP Output</p>
        <div class="php">
            <?php
                function test() {
                    static $count = 0;
                    echo $count;
                }
                // For the sake of example, I have added a call
                test();
            ?>
        </div>
    </div>
    <p class="center" style="margin:20px 0;color:#333;">All content in this file was developed by Rob Cordero for IST 297i.</p>
</div>
</body>
</html>