<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP5 Arrays</title>
</head>

<body>
	<h1>PHP 5 arrays</h1>
	<p>An array stores multiple values in one single variable:</p>
	<?php
		$cars = array("vovle","BMS","Toyota");
	echo ("I like ".$cars[0].",".$cars[1]." and ".$cars[2].".");
	?>
	<h2>Loop through an indexed array</h2>
	<p>To loop through and print all the values of an indexed array, you could use a for loop, like this:</p>
	<?php
	$cars = array("red","blue","green","yellow");
	
	for ($x = 0;$x<count($cars);$x++)
	{
		echo $cars[$x];
		echo "<br>";
	}
	?>
	
	<h1>PHP Associative Arrays</h1>
	<p>Associative arrays are array that use the named keys that asigned to them. there are two ways to create an associative array:
	$age = array("peter"=>"35","Ben"=>"37","Joe"=>"43");
		
		or
		
		$age['peter'] = "35";
		$age['Ben'] =  "37";
		$age['Joe'] = "43";
	</p>
	<?php
	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
	
	foreach($age as $x => $x_value)
	{
		echo "Key=".$x.", Value = ".$x_value;
		echo "<br>";
	}
?>
	
	
</body>
</html>