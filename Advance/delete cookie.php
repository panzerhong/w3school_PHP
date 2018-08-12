<!doctype html>
<?php
	// set the expiration date to one hour ago
	setcookie("user","",time()-3600);
?>
<html>
<head>
<meta charset="utf-8">
<title>Delete Cookie</title>
</head>

	<?php
	echo "Cookie 'user' is deleted"
	?>
<body>
</body>
</html>