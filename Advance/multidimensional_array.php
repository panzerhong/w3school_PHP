<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Multidimensional Arrays</title>
</head>
<h1>PHP Mulitdimensional Arrays</h1>
	<b><i><p>A multidimensional aray is any array that contains one or more arrays</p></i></b>
	
	<p>A multidimensional array is an array containing one or more arrays.

PHP understands multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.</p><br><br>
	
	<p><b><i>The dimension of an array indicates the number of indices you need to select an element.

For a two-dimensional array you need two indices to select an element
For a three-dimensional array you need three indices to select an element</i></b></p>
	<h2>PHP - Two-dimensional Arrays</h2>
	<p>A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).First, take a look at the following table:

Name	Stock	Sold
Volvo	22	18
BMW	15	13
Saab	5	2
Land Rover	17	15</p>
	
	<p>We can store the data from the table above in a two -dimensional array, like this</p>
	<p>
	$cars = array
	(
	array("volv",22,18),
	array("BMW",15,13),
	array("Saab",5,2),
	array("Land Rover",17,15)
	);</p>
	
	<p>Now the two-dimensional $cars array contains four arrays, and it has two indices: row and column.

To get access to the elements of the $cars array we must point to the two indices (row and column):</p>
	
	<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>
	<p>We can also put a for loop inside another for loop to get the elements of the $cars array (we still have to point to the two indices):
	</p>
	
	<?php
		$person = array(
		array("zatin",19,999),
		array("dy",88,888),
		array("Ma",98,9090),
		array("soley",78,777)
		);
			
	for ($row=0;$row<4;$row++)
	{
		echo "<h2>Row Number $row</h2>";
		
			for($column=0;$column<3;$column++)
			{
				echo "<li>".$person[$row][$column]."</li>";
			}
		echo "<br>";
	}
	?>
	
<body>
</body>
</html>