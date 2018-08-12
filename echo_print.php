<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>echo_print</title>
</head>

<body>
	
	
	<p>
		The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
	</p>
	
	<h1> The echo Statement</h1>
	
	<?php 
	
		echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
	?>
	
	<h1> THE Print Statement</h1>
	
	<?php
	print "<h2>PHP is Fun!</h2>";
	print "Hello World!<br>";
	print "I'm about to learn PHP!";
	?>
	
	
</body>
</html>