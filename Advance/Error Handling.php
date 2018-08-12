<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	The default error handling in PHP is very simple. An error message with filename, line number and a message describing the error is sent to the browser.
	<?php
$file=fopen("welcome.txt","r");
	if(!file_exists("welcome.txt")) {
  die("File not found");
} else {
  $file=fopen("welcome.txt","r");
}
?>
</body>
</html>