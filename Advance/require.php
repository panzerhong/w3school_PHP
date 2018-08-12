<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP require</title>
</head>

<body>
	<h1>PHP include vs. require</h1>
	<p>The <b>require</b> statement is also used to include a file into the PHP code. However there is one big difference between inlcude and require; when a file is included with the <b>include</b> statement and PHP cannot find it, the script will continute to execute:</p>
	
	<h1>Welcome to my home page!</h1>
<?php include 'noFileExists.php';
echo "I have a $color $car.";
?>
</body>
</html>