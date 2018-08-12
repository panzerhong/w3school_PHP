<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>PHP Syntax</title>
</head>

<body>

	<!--
	Comments in PHP
A comment in PHP code is a line that is not read/executed as part of the program. Its only purpose is to be read by someone who is looking at the code.

Comments can be used to:

Let others understand what you are doing
Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code
	
-->

	<?php
	echo "Hello World!";

	// This is a single-line comment

	# This is also a single-line comment

	/*
	This is a multiple-lines comment block
	that spans over multiple
	lines
	*/

	// You can also use comments to leave out parts of a code line

	$x = 5 + 5;
	echo $x;

	ECHO "<br>Hello World!<br>";
	echo "Hello World!<br>";
	EcHo "Hello World!<br>";
		
	$color= "red";
	/*In the example below, $color is treated as variable so, the 2below statements will not
	execute.*/
	echo "My car is ".$color."<br>";
	echo "My house is ".$COLOR ."<br>";
	echo " My boat is ".$coLOR."<br>";

	?>

</body>

</html>