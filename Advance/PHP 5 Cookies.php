<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP 5 Cookies</title>
</head>

<body>
	<h1>A cookie is often used to identify a user</h1>
	<h2>What is Cookie</h2>
	<p>A cookie is often used to identify a user . A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP , you can both create and retrieve cookie values.</p>
	
	<h2>Create Cookies with PHP</h2>
	<p>A cookie is created with the setcookie() function</p>
	
	<h2>Syntax</h2>
	<p><i>setcookie(name,value,expire,path,domain,secure, httponly);</i></p>
	
	<p><i><b>On the name parameter is required. All other parameters are optional.</b></i></p>
	<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
	
	<h1>Note: The setcookie() function must appear BEFORE the <html> tag.</h1>
</body>
</html>