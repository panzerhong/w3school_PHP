<!doctype html>
<?php
// Start the Session
session_start();

?>
<html>
<head>
<meta charset="utf-8">
<title>PHP5 Sessions</title>
</head>
	
<body>
	<h1>PHP 5 Sessions</h1>
	<p>A session is a way to store information (in variables) to be used across multiple pages
	
	<i>Unlike a cookie, the information is not stored on the users computer.</i></p>
	
	<h1>What is a PHP Session?</h1>
	<p>When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.

Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.

So; Session variables hold information about one single user, and are available to all pages in one application.</p>
	
	<h1>Start a PHP Session</h1>
	<p>A session is started withe <i>session_start()</i>function</p>
	
	<p>Session variables are set with the PHP global variable : $_SESSION.</p>
	
	<?php
	// Set session variales
	$_SESSION["favcolor"] = "green";
	$_SESSION["favanimal"] = "cat";
	echo "Session variables are set.";
	?>
	
	<h1>Note :The <i>session_start()</i> function must be the very first thing in your document. Before any HTML tags</h1>
</body>
</html>