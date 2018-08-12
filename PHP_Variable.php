<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>PHP5 variables</title>
</head>
<!--	Variables are "containers" for storing information.-->

<!--	In PHP, a variable starts with the $ sign, followed by the name of the variable:-->
<h3>Note: Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.</h3>

<p>PHP Variables A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume). Rules for PHP variables: A variable starts with the $ sign, followed by the name of the variable A variable name must start with a letter or the underscore character A variable name cannot start with a number A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ ) Variable names are case-sensitive ($age and $AGE are two different variables)</p>
<?php

$txt = "Hello world!";
$x = 5;
$y = 10.5;
echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";


echo "<h1>String Printing</h1>";
echo "<br>";

$txt = "W3Schools.com <br>";
echo "I love $txt";

echo "I love " . $txt . "!";

echo "<h1>Variable Output</h1>";
$x = 5;
$y = 4;
echo $x + $y + "Helloworld";

echo "<p>In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

local
global
static</p>";
	
	echo "<h1>Global and Local Scope</h1>";
	
echo "<p>A variable declared outside can only access out side of the function</p>";
	
	$x = 5; // global scope
	function my()
	{
		$x = 89;
		echo"<p>Variable x inside function is : $x </p>";
	}
	
	my();
	
	echo "<p>Variable x outside function is : $x</p>";
	
	
	echo "<h1> The Global Keyword </h1>";
		echo "<p>The global keyword is used to access a global variable from within a funciton </p>";
		
		function test(){
		global $x,$re;
		$re  = $x + 90;
	}
	
	test();
	echo $re;
		
	
	echo "<h1>PHP The static Keyword</h1>";
	
	echo "<p>Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.</p>";
	function a()
	{
		static $x = 0;
		echo $x;
		$x++;
		
	}
	for ($i =0;$i<5;$i++)
	{
		a();
	}

?>

<body>
</body>

</html>