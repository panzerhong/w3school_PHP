<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>PHP_Global_Variables</title>
</head>

<body>

	<h1>PHP Global Variables - Superglobals</h1>
	<p>
		The PHP superglobal variables are : > $GLOBALS<br> > $_SERVER<br> > $_REQUEST<br> > $_POST<br> > $_GET<br> > $_FILES<br> > $_ENV<br> > $_COOKIE<br> > $_SESSION<br>
	</p>
	<h1>
	PHP $GLOBALS</h1>



	<p>$GLOBALS is a PHP super global variable which is used to access global variables fromo anywhere in the PHP script (also from within functions or methods).</p>
	<?php
	$x = 75;
	$y = 25;

	function addition() {
		$GLOBALS[ 'z' ] = $GLOBALS[ 'x' ] + $GLOBALS[ 'y' ];
	}

	addition();
	echo $z;
	?>

	<h1>PHP $_SERVER</h1>
	<p>$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations. The example below shows how to use some of the elements in $_SERVER:</p>

	<?php
	echo $_SERVER[ 'PHP_SELF' ]; # Returns the filename of the currently executing script
	echo "<br>";
	echo $_SERVER[ 'SERVER_NAME' ]; # Returns the version of the common gateway interface (CGI) the server is using
	echo "<br>";
	echo $_SERVER[ 'HTTP_HOST' ]; # 
	echo "<br>";
	echo $_SERVER[ 'HTTP_REFERER' ];
	echo "<br>";
	echo $_SERVER[ 'HTTP_USER_AGENT' ];
	echo "<br>";
	echo $_SERVER[ 'SCRIPT_NAME' ];
	?>
	<p>
		lement/Code Description $_SERVER['PHP_SELF'] Returns the filename of the currently executing script<br> $_SERVER['GATEWAY_INTERFACE'] Returns the version of the Common Gateway Interface (CGI) the server is using<br> $_SERVER['SERVER_ADDR'] Returns the IP address of the host server<br> $_SERVER['SERVER_NAME'] Returns the name of the host server (such as www.w3schools.com)<br> $_SERVER['SERVER_SOFTWARE'] Returns the server identification string (such as Apache/2.2.24)<br> $_SERVER['SERVER_PROTOCOL'] Returns the name and revision of the information protocol (such as HTTP/1.1)<br> $_SERVER['REQUEST_METHOD'] Returns the request method used to access the page (such as POST)<br> $_SERVER['REQUEST_TIME'] Returns the timestamp of the start of the request (such as 1377687496)<br> $_SERVER['QUERY_STRING'] Returns the query string if the page is accessed via a query string<br> $_SERVER['HTTP_ACCEPT'] Returns the Accept header from the current request<br> $_SERVER['HTTP_ACCEPT_CHARSET'] Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)<br> $_SERVER['HTTP_HOST'] Returns the Host header from the current request<br> $_SERVER['HTTP_REFERER'] Returns the complete URL of the current page (not reliable because not all user-agents support it)<br> $_SERVER['HTTPS'] Is the script queried through a secure HTTP protocol<br> $_SERVER['REMOTE_ADDR'] Returns the IP address from where the user is viewing the current page<br> $_SERVER['REMOTE_HOST'] Returns the Host name from where the user is viewing the current page<br> $_SERVER['REMOTE_PORT'] Returns the port being used on the user's machine to communicate with the web server<br> $_SERVER['SCRIPT_FILENAME'] Returns the absolute pathname of the currently executing script<br> $_SERVER['SERVER_ADMIN'] Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)<br> $_SERVER['SERVER_PORT'] Returns the port on the server machine being used by the web server for communication (such as 80) $_SERVER['SERVER_SIGNATURE'] Returns the server version and virtual host name which are added to server-generated pages<br> $_SERVER['PATH_TRANSLATED'] Returns the file system based path to the current script<br> $_SERVER['SCRIPT_NAME'] Returns the path of the current script<br> $_SERVER['SCRIPT_URI'] Returns the URI of the current page<br>"
	</p>

	<h1>PHP $_REQUEST</h1>
	<p>PHP $_REQUEST is used to collect the data from the submitting and HTMl form</p><br>
	<p>The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the
		<form> tag. In this example, we point to this file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_REQUEST to collect the value of the input field:</p>

	<form method="post" action="?php echo $_SERVER['PHP_SELF'];?>">
		Name : <input type="text" name="fname"><input type="submit">
	</form>
	<?php
	if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
		// collect value of input field
		$name = htmlspecialchars( $_REQUEST[ 'fname' ] );
		if ( empty( $name ) ) {
			echo "Name is empty";
		} else {
			echo $name;
		}
	}
	?>

	<h1>PHP $_POST</h1>
	<p>PHP $_POST is widely used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.<br>
	</p>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		Name: <input type="text" name="fname">
		<input type="submit">
	</form>

	<?php
	if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
		// collect value of input field
		$name = $_POST[ 'fname' ];
		if ( empty( $name ) ) {
			echo "Name is empty";
		} else {
			echo $name;
		}
	}
	?>

	<h1>PHP$_GET</h1>
	<p>PHP $_GET can also be used to collect form data after submitting an HTML form with method="get".

$_GET can also collect data sent in the URL.

Assume we have an HTML page that contains a hyperlink with parameters:</p>
	<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
</body>

</html>