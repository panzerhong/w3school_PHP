<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Constants</title>
</head>

<body>
	<H1>PHP Constants</H1>
	<p>A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).
	
		<b><i>Note: Unlike variables, constants are automatically global across the entire script.</i></b>
	</p>
	
	<h1>Create a PHP Constant</h1>
	<p>To create a constant, use the <i>define()</i> function</p>
	
	<h4>Syntax : define(name,value,case-insensitive)</h4>
	<p>
		name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
	</p>
	<?php
	define("zatin","is zatin");
	echo zatin;
	?>
	<p>Constants are automatically global and can be used across the entire script.

The example below uses a constant inside a function, even if it is defined outside the function:</p>
	<?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING;
}
 
myTest();
?>
</body>
</html>