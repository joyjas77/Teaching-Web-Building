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
    <p class="title64">IST 297i - Unit 4 Lab 2</p>
    <p>Rob Cordero</p>
    <hr />
    <!-- Challenge -->
    <p class="title24">Challenge</p>
    <p><ol>
        <li>Instantiate an integer variable.</li>
        <li>Test the value of the variable.</li>
        <li>Multiply the variable by a set number & print out result.</li>
        <li>Increase the variable by one ten times.</li>
    </ol></p>
    <div class="exercise">
        <p>Raw Code</p>
        <div class="code">
&lt?php
    // Assign & check
    $num = 2; // Assign num
    echo "&ltp&gtValue of num: $num&lt/p&gt";
    
    // Multiply
    echo "&ltp&gtMultiplying $num by $num.&lt/p&gt"; // Challenge specified *any* number
    $num *= $num; // alternative: pow($num, $num);
    echo "&ltp&gtValue of num: $num&lt/p&gt";
                
    // 3. Loop & Add
    echo "&ltp&gtAdding one to \$num 10 times&lt/p&gt";
    for ($i = 0; $i &lt 10; $i++) {
        $num ++;
        echo "&ltp&gt[$i] - Num incremented, new value: $num&lt/p&gt";
    }
    echo "&ltp&gtFinal value of num: $num&lt/p&gt";
?&gt
        </div>
        <p>PHP Output</p>
        <div class="php">
            <?php
                // 1. Assign & Check
                $num = 2; // Assign num
                echo "<p>Value of num: $num</p>";
                
                // 2. Multiply
                echo "<p>Multiplying $num by $num.</p>"; // Challenge specified *any* number
                $num *= $num; // alternative: pow($num, $num)
                echo "<p>Value of num: $num</p>";
                
                // 3. Loop & Add
                echo "<p>Adding one to \$num ($num) ten times</p>";
                for ($i = 0; $i < 10; $i++) {
                    $num ++;
                    echo "<p>[$i] - Num incremented, new value: $num</p>";
                }
                echo "<p>Final value of num: $num</p>";
            ?>
        </div>
    </div>
    <hr />
    <!-- Example 4-21 -->
    <input type="button" value="Example 4-21" onclick="$('#ex4-21').slideToggle()" />
    <div id="ex4-21" class="exercise">
        <p>Raw Code</p>
        <div class="code">
&lt?php
    $bank_balance = 2000; // Give a principal for the sake of example
    $money = 0;
    $savings = 0;
    if ($bank_balance &lt 300) {
        $money          = 1000;
        $bank_balance   += $money;
    } elseif ($bank_balance &gt 200) {
        $savings        += 100;
        $bank_balance   -= 100;
    } else {
        $savings += 50;
        $bank_balance -= 50;
    }
    echo "&ltp&gtBank balance: $bank_balance&lt/p&gt";
    echo "&ltp&gtMoney on hand: $money&lt/p&gt";
    echo "&ltp&gtSavings balance: $savings&lt/p&gt";
?&gt
        </div>
        <p>PHP Output</p>
        <div class="php">
            <?php
                $bank_balance = 2000; // Give a principal for the sake of example
                $money = 0;
                $savings = 0;
                if ($bank_balance < 300) {
                    $money          = 1000;
                    $bank_balance   += $money;
                } elseif ($bank_balance > 200) {
                    $savings        += 100;
                    $bank_balance   -= 100;
                } else {
                    $savings += 50;
                    $bank_balance -= 50;
                }
                echo "<p>Bank balance: $bank_balance</p>";
                echo "<p>Money on hand: $money</p>";
                echo "<p>Savings balance: $savings</p>";
            ?>
        </div>
    </div>
    <hr />
    <!-- Example 4-22 -->
    <input type="button" value="Example 4-22" onclick="$('#ex4-22').slideToggle()" />
    <div id="ex4-22" class="exercise">
        <p>Raw Code</p>
        <div class="code">
&lt?php
    $page = "News"; // Add $page to provide output
    if ($page == "Home") {
        echo "&ltp&gtYou selected Home&lt/p&gt";
    } elseif ($page == "About") {
        echo "&ltp&gtYou selected About&lt/p&gt";
    } elseif ($page == "News") {
        echo "&ltp&gtYou selected News&lt/p&gt";
    } elseif ($page == "Login") {
        echo "&ltp&gtYou selected Login&lt/p&gt";
    } elseif ($page == "Links") {
        echo "&ltp&gtYou selected Links&lt/p&gt";
    }
?&gt
        </div>
        <p>PHP Output</p>
        <div class="php">
            <?php
                $page = "News"; // Add $page to provide output
                if ($page == "Home") {
                    echo "<p>You selected Home</p>";
                } elseif ($page == "About") {
                    echo "<p>You selected About</p>";
                } elseif ($page == "News") {
                    echo "<p>You selected News</p>";
                } elseif ($page == "Login") {
                    echo "<p>You selected Login</p>";
                } elseif ($page == "Links") {
                    echo "<p>You selected Links</p>";
                }
            ?>
        </div>
    </div>
    <hr />
    <!-- Example 4-23 -->
    <input type="button" value="Example 4-23" onclick="$('#ex4-23').slideToggle()" />
    <div id="ex4-23" class="exercise">
        <p>Raw Code</p>
        <div class="code">
&lt?php
    $page = "News"; // Assign value to provide output
    switch ($page) {
        case "Home":
            echo "&ltp&gtYou selected Home&lt/p&gt";
            break;
        case "About":
            echo "&ltp&gtYou selected About&lt/p&gt";
            break;
        case "News":
            echo "&ltp&gtYou selected News&lt/p&gt";
            break;
        case "Login":
            echo "&ltp&gtYou selected Login&lt/p&gt";
            break;
        case "Links":
            echo "&ltp&gtYou selected Links&lt/p&gt";
            break;
    }
?&gt
        </div>
        <p>PHP Output</p>
        <div class="php">
            <?php
                $page = "News"; // Assign value to provide output
                switch ($page) {
                    case "Home":
                        echo "<p>You selected Home</p>";
                        break;
                    case "About":
                        echo "<p>You selected About</p>";
                        break;
                    case "News":
                        echo "<p>You selected News</p>";
                        break;
                    case "Login":
                        echo "<p>You selected Login</p>";
                        break;
                    case "Links":
                        echo "<p>You selected Links</p>";
                        break;
                }
            ?>
        </div>
    </div>
    <hr />
    <!-- Example 4-26 -->
    <input type="button" value="Example 4-26" onclick="$('#ex4-26').slideToggle()" />
    <div id="ex4-26" class="exercise">
        <p>Raw Code</p>
        <div class="code">
&lt?php
    $fuel = 0;
    echo $fuel &lt= 1 ? "&ltp&gtFill tank now&lt/p&gt" : "&ltp&gtThere's enough fuel.&lt/p&gt";
?&gt
        </div>
        <p>PHP Output</p>
        <div class="php">
            <?php
                $fuel = 0;
                echo $fuel <= 1 ? "<p>Fill tank now</p>" : "<p>There's enough fuel.</p>";
            ?>
        </div>
    </div>
    <hr />
    <!-- Example 4-28 -->
    <input type="button" value="Example 4-28" onclick="$('#ex4-28').slideToggle()" />
    <div id="ex4-28" class="exercise">
        <p>Raw Code</p>
        <div class="code">
&lt?php
    $fuel = 10; // Set start at 10 units
    // Announce how much fuel to start
    echo "&ltp&gtStarting drive - $fuel units of fuel.&lt/p&gt";

    // Reduce fuel by 1 each iteration
    while ($fuel &gt 1) {
        $fuel --;
        echo "&ltp&gtYou are okay to keep driving. $fuel units left.&lt/p&gt";
    }

    // Warn of low fuel
    echo "&ltp&gtYou are running low on fuel! Less than 1 unit left.&lt/p&gt";
?&gt
        </div>
        <p>PHP Output</p>
        <div class="php">
            <?php
                $fuel = 10; // Set start at 10 units
                // Announce how much fuel to start
                echo "<p>Starting drive - $fuel units of fuel.</p>";
                
                // Reduce fuel by 1 each iteration
                while ($fuel > 1) {
                    $fuel --;
                    echo "<p>You are okay to keep driving. $fuel units left.</p>";
                }
                
                // Warn of low fuel
                echo "<p>You are running low on fuel! Less than 1 unit left.</p>";
            ?>
        </div>
    </div>
    <p class="center" style="margin:20px 0;color:#333;">All content in this file was developed by Rob Cordero for IST 297i.</p>
</div>
</body>
</html>