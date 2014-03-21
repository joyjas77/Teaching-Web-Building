<!DOCTYPE html>
<html>
	<head>
		<title>
			Brian Fay Unit 3 Lab 1
		</title>
		<meta charset="utf-8">
	<style type="text/css">
		body{
			font-family: Arial;
		}
		.description {
		font-size: 12pt;
		color: #000;
		}
		.phpOutput {
		background-color: #000000;
		border-style:double;
		border-width:5px;
		padding:10px;
		margin:1px;
		color: #8DDB8A;
		font-size: 16pt;
		}
	</style>
	</head>
	
	<body>
	<h1>
		Example 3-5:
	</h1>
	<p class="description">
		In this example, a multi-dimensional array is created with the following elements:<br>
		('x', '', 'o')<br>
		('o', 'o' 'x')<br>
		('x', 'o' 'x')<br>
		The third element of the second row is printed through the statement, "echo $oxo[1][2]",
		generating the following output:
	</p>
	<p class="phpOutput">
		<?php
			$oxo = array(array('x', '', 'o'),
						array('o', 'o', 'x'),
						array('x', 'o', ''));
			echo $oxo[1][2];
		?>
	</p>

	<h1>
		Example 3-6
	</h1>
	<p class="description">
		This example demonstrates printing a multi-line statement using "echo." It dereferences a 
		variable that contains the author's name:
	</p>
	<p class="phpOutput">
		<?php
			$author = "Alfred E Newman";

			echo "This is a Headline

			This is the first line.
			This is the second.
			Written by $author.";
		?>
	</p>

	<h1>
		Example 3-7
	</h1>
	<p class="description">
		This example produces the same output as 3-6. It uses one variable to store all the text, and then 
		"echoes" the value stored in the double-quoted text.
	</p>
	<p class="phpOutput">
		<?php
			$author = "Alfred E Newman";
			$text = "This is a Headline

			This is the first line.
			This is the second.
			Written by $author.";
			echo $text;
		?>

	<h1>
		Example 3-8
	</h1>
	<p class="description">
		This example uses a "heredoc," indicated by the "<<<" symbol. The benefit of using this is that 
		newline and carriage return characters will be read directly without having to type "\n" or "\r."
		However, this doesn't make a difference in the displayed HTML output (we need to use a &ltbr&gt for a newline).
		And the closing identifier needs to be on its own line with no spaces. Very ugly, in my opinion.
	</p>
	<p class="phpOutput">
		<?php
			$author = "Alfred E Newman";
			echo <<<_END
			This is a Headline

			This is the first line.
			This is the second.
			- Written by $author.
_END;
			/* There can't be a tab or anything on the previous line... is it me or is
			this syntax absolutely detestable?
			*/
		?>
	</p>
	<h1>
		Example 3-10
	</h1>
	<p class ="description">
		In this final example, the dynamic typing of php is demonstrated. The number 838102050 is calculated
		by multiplying 12345 and 67890. This number is stored in a variable. Many languages would treat this variable as an integer
		until the programmer explicitly cast it as a different type, but with PHP, the type is determined at runtime. The variable 
		is treated as a string when the substr() function is called. The 4th character of the string, 1, is printed, as seen by this output:
	</p>
	<p class="phpOutput">
		<?php
			$number = 12345 * 67890;
			echo substr($number, 3, 1);
		?>
	</p>

	<h1>
		Challenge!
	</h1>
	<p class="description">
		This challenging challenge has challenged me to challenge myself by printing out the second element of an array. <br><br>
		Ṯ̩͍̖̮̤ͦ̀̎ͮ̽̎Ḧ̳̞͖̹̦͈̩́͛́̀̚̚E͈̟̔̽ͨ͞ͅ ͉͎̠͈̠͐͂H̦̖͚̺̘̠̝O͕͍͈͙͐̒͋̔ͥͨ̾R̫͚͇͎̗̤̓͑̑́̾̏͠R̠̼̖̙̰͗̄͗͠Ő͙̗̳R͚̯̟̱̥̝̕!͎͕̟͊͘!̨̟͓̹̜̞̈́!̇̓ͨ̅͌͐̋!̫̪͖͊ͪ̌͆͒ͪ̀!ͩ̆ͭ̎́͐͏̣̱̟̠͙̦!͓̣̪̯͒͆ͧ́! <br><br>
		Will I survive this terrifying endeavor?
	</p>
	<p class="phpOutput">
		<?php
			$challengeArray = array('that', 'wasn\'t', 'very', 'challenging');
			echo $challengeArray[1];
		?>
	</p>
	</body>
</html>