<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<h1>Validata an IP Address</h1>
	<p>The following example uses the filter_var() function to check if the variable $ip is a valid IP address: </p>
	<?php
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address");
} else {
    echo("$ip is not a valid IP address");
}
?>

<body>
</body>
</html>