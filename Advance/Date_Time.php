<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Date and Time</title>
</head>
	
	<p>The PHP date() function is used to format a date and/or a time.</p>
	<h2>
	SYNTAX</h2>
	
	<p><b><i>date(format,timestamp)</i></b></p>
	
	<p><li>Parameter : Format<br>
		</li>Description : Required. specifies the format of the the timestamp</p>
	<p><li>Parameter : Timestamp</li>
	Description : Optional Specifies a timestamp. Default is the current date and time</p>
	<p><i>A timestamp is a sequence of characters, denoting the date and/or time at which a certain event occurred.</i></p>
	<h2>Get a Simple Date</h2>
	<p>The required format parameter of the date() function specifies how to format the date (or time).

Here are some characters that are commonly used for dates:

d - Represents the day of the month (01 to 31)
m - Represents a month (01 to 12)
Y - Represents a year (in four digits)
l (lowercase 'L') - Represents the day of the weekOther characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.

The example below formats today's date in three different ways:</p>
	<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>
	

<body>
</body>
</html>