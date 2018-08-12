<h2></h2><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sort</title>
</head>

<body>
	<h1>PHP- Sort Functions for arrays</h1>
	<p>In this chapter, we will go through the following PHP array sort functions:
		
		sort() - sort arrays in ascending oder
		rsort() - sort arrays in descending order
		asort() - sort associative arrays in ascending order, according to the value
		ksort() - sort associative arrays in ascending order, according to the key.
		arsort() - sort associative arrays in decending order , according to the value
		krsort() - sort associative arrays in denscending order, according to the key
	</p>
	
	<h1>Sort Array in Ascending order - sort()</h1>
	<p>The following sorts the elements of the $cars array in ascending alphabetical order : </p>
	<?php
	$co = array("red","green","blue");
	$sor = sort($co);
	foreach ($co as $value)
	{
		echo $value."<br>";
	}
	
	echo "<h2> Number Sorting </h2>";
	
	
	$num = array(89,3,4,2,5,99,53);
	sort($num);
	foreach($num as $val)
	{
		echo $val."<br>";
	}
	
	echo "<h2> Sort Array ( Ascending order), according to value - asort()"."<br>";
	
		$arr = array("C"=>3,"A"=>1,"B"=>2);
	sort($arr);// Associative array
	
		foreach($arr as $v)
		{
			echo $v."<br>";
		}
	
	echo "<h2>Sort associative base on key alphabet </h2>";
	$ar = array("H"=>7,"L"=>2,"A"=>90);
	ksort($ar);
	
	foreach($ar as $a)
	{
		echo $a."<br>";
	}
	?>
	
	
</body>
</html>