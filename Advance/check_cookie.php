<!doctype html>
<?php
	setcookie("user","test",time()+3600,"/");
?>

<html>
<head>
<meta charset="utf-8">
<title>Cookie Checking</title>
</head>
	<p>The following example creates a small script that checks whether cookies are enabled. First, try to create a test cookie with the setcookie() function, then count the $_COOKIE array variable:</p>
<?php
	if(count($_COOKIE)>0)
	{
		echo "Cookie are enabled.";
	}
	else
	{
		echo "Cookie are disabled";
	}
	?>
<body>
</body>
</html>