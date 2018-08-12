<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Loop</title>
</head>

<body>
	<h2>THE PHP for Loop</h2>
	<p>The for loop is used when you know in advance how many times the script should run.</p>
	<b>SYNTAX</b>
	<p>foreach ($array as $value)
	{
		code to be executed;
		}</p>
	
	<?php
	$co = array("red","blue","green");
	foreach ($co as $value)
	{
		echo "$value<br>";
		echo "$value[2]";
	}
	?>
</body>
</html>