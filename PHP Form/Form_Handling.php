<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Handling</title>
</head>

<body>
	<h1>PHP5 Form Handling</h1>
	<p>The PHP superglobals $_GET and $_POST are used to collect form data.</p>
	<h2>PHP- A simple HTML Form</h2>
	<P>The example below displays a simple HTML form with two input fields and a submit button:</P>
	
	<form action="welcome.php" method="post">
	Name: <input type="text" name="name"><br>
		E-mail : <input type="text" name="email"><br>
		<input type="submit">
	</form>
	
</body>
</html>