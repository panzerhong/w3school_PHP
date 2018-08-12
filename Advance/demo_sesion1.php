<!doctype html>
<?php
// Start the session
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>PHP Session</title>
</head>

<body>
	<h1>Start a PHP Session</h1>
	<P>A session is started with the session_start() function.

Session variables are set with the PHP global variable: $_SESSION.

Now, let's create a new page called "demo_session1.php". In this page, we start a new PHP session and set some session variables:</P>
	<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>
	<h1>Get PHP Session variable values</h1>
	<p>Next, we create another page called "demo_session2.php". From this page, we will access the session information we set on the first page ("demo_session1.php").

Notice that session variables are not passed individually to each new page, instead they are retrieved from the session we open at the beginning of each page (session_start()).

Also notice that all session variable values are stored in the global $_SESSION variable:</p>
</body>
</html>