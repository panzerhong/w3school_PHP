<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome</title>
</head>

<body>
	Welcome <?php
	echo $_POST["name"]; ?><br>
	Your email address is :<?php
	echo $_POST["email"]
	?>
	<h1>GET vs POST</h1>
	<p>Both GET & POST create an array (eg : array ("key"=>value, "key1"=>value, "key2"=>value,....)). This array holds key/value pairs , where keys are the names of the form controls and values are the input data from the user.
	
	Both GET and POST are treatedas $_GET and $_POST. These are superglobals, which means that they are always accessible, regardless of scope - and you can access them from any function, clas or file without having to do anything special.
	
	$GET => An array passed to the current script via the URL parameter
	
	$POST => An array passed to the current script via the HTTP POST method.</p>
	
	
	<h1>When to use GET ?</h1>
	<p>GET may be used for sending non-sensitive data.</p>
	<p>POST used generally. Informaiton sent from a form with the POST method is invisible to others & has no limits on the amount of information to send</p>
</body>
</html>