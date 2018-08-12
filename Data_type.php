<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<h2>PHP Integer</h2>
	<p>An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

Rules for integers:

An integer must have at least one digit
An integer must not have a decimal point
An integer can be either positive or negative
Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)</p>
	
	<?php
	$x = 5985;
	var_dump($x);
	?>
	
	<h2>PHP Float</h2>
	<p>A float (floating point number) is a number with a decimal point or a number in exponential form.

In the following example $x is a float. The PHP var_dump() function returns the data type and value:</p>
	<?php 
$x = 10.365;
var_dump($x);
?>

	<h2>PHP Array</h2>
	<p>An array stores multiple values in one single variable. In the following exmaple $cars is an array. The PHP var_dump() function returns the data type and value"
	</p>
	<?php
	$arr = array("hello","world","zatin");
	var_dump($arr);
	?>
	
	<h2>PHP Object</h2>
	<p>An object is a data type which stores data and information on how to process that data.

In PHP, an object must be explicitly declared.

First we must declare a class of object. For this, we use the class keyword. A class is a structure that can contain properties and methods:</p>
	
	<?php
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>
	
	<h1>PHP5 Strings</h1>
	<h2>A string is a sequence of characters</h2>
	
	<p>PHP STRING METHOD TYPE</p>
	<?php
		echo strlen("Hello world");echo "<br>";
	echo str_word_count("Hello world!"); echo "<br>";
	echo strrev("Hello world!");echo "<br>";
	echo strpos("Hello world!", "world");echo "<br>";
	echo str_replace("world", "Dolly", "Hello world!"); echo "<br>";
	?>
	
</body>
</html>