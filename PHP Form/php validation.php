<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Form Validation</title>
</head>

<body>
	<h1>PHP Form Validation</h1>
	<p>The HTML form we will be working at in these chapters, contains various input fields: required and optional text fields, radio buttons, and a submtit button :</p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<!--What is $_SERVER["PHP_SELF"] variable ?
The $_SERVER["PHP_SELF"] is a super global variable that returns the file name of the currently executing script.

The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.
-->
		<br><br>
		Name : <input type="text" name="name"><br><br>
		E-mail : <input type="text" name="email"><br><br>
		Website : <input type="text" name="website"><br><br>
		Comment: <textarea name="Comment" rows="5" cols ="40">
		
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other
		</textarea><br><br>
		
	</form>
</body>
</html>