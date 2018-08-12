<!doctype html>
<?php
		$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
	?>
<html>
<head>
<meta charset="utf-8">
<title>Modify a Cookie Value</title>
</head>

<body>
	<p>To modify a cookie, just set (again) the cookie using the setcookie() funciton:</p>
	
	
</body>
</html>