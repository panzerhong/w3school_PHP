<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<p>
		The filter_var() function both validate and sanitize data.<br>
		The filter_var() function filters a single variable with a specified filter.
		It takes two pieces of data:
		= The variable you want to check <br>
		= the type of check to use<br>
	</p>
	<h1>Sanitize a String</h1>
	<p>The following example uses the filter_var() function to remove all HTML tags from a string:</p>
	
	<?php
	$str ="<h1>hellow world!</h1>";
	$newstr = filter_var($str,FILTER_SANITIZE_STRING);
	echo $newstr;
	echo $str;
	?>

<body>
</body>
</html>