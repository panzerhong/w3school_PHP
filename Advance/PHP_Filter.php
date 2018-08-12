<!DOCTYPE html>
<html>
<head>
<style>
	
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>
<body>
	
	<p>PHP filters are used to validate and sanitize external input.

The PHP filter extension has many of the functions needed for checking user input, and is designed to make data validation easier and quicker.

The filter_list() function can be used to list what the PHP filter extension offers:</p>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>
	
	<h2>Why use Filters ?</h2>
	<p>Many web applications receive external input. External input/data can be:

User input from a form
Cookies
Web services data
Server variables
Database query results</p>
	
	<p><i>You should always validate external Data</i>Invalid submitted data can lead to security problems and break your webpage!
By using PHP filters you can be sure your application gets the correct input!</p>

</body>
</html>