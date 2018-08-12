<!doctype html>
<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>
<h1>Note: The session_start() function must be the very first thing in your document. Before any HTML tags.</h1>
	<?php
//	session_start();
	print_r($_SESSION);
	// remove all session variables
	session_unset();
	
	// destroy the session
	session_destroy();
	
//	print_r($_SESSION);
	?>
</body>
</html>