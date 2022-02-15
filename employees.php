<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>


<table>
  <tr>
    <th>TCid</th>
	<th>Name</th>
	<th>Surname</th>
	<th>Wage</th>
    <th>Birthdate</th>
    <th>Address</th>
  </tr>
  





<?php

include "config.php";

$sql_statement = "SELECT * FROM employees";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
	$tcid = $row['tcid'];
	$name = $row['name'];
	$sname = $row['sname'];
	$wage = $row['wage'];
	$birthdate = $row['birthdate'];
	$address = $row['address'];
	echo "<tr><th>" . $tcid . "</th><th>" . $name . "</th><th>" . $sname . "</th><th>" . $wage . "</th><th>" . $birthdate . "</th><th>" . $address . "</th></tr>";
}
?>
</table>
<br>
<b>Enter to be deleted employee's id.</b>
<form action="deleteemployees.php" method="POST">
	<input type="text" name="tcid" placeholder="Type tcid"><br>
	<button>send</button>
</form>
<br>
<a href="/myproject/index.php">Go to main menu</a>


</body>
</html>