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
    <th>Did</th>
	<th>Deadline</th>
	<th>Situation</th>
	<th>Specifications</th>
  </tr>
  





<?php

include "config.php";

$sql_statement = "SELECT * FROM devices";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
	$did = $row['did'];
	$deadline = $row['deadline'];
	$situation = $row['situation'];
	$specifications = $row['specifications'];
	echo "<tr><th>" . $did . "</th><th>" . $deadline . "</th><th>" . $situation . "</th><th>" . $specifications . "</th></tr>";
}
?>
</table>
<br>
<b>Enter to be deleted device's id.</b>
<form action="deletedevice2.php" method="POST">
	<input type="text" name="did" placeholder="Type did"><br>
	<button>send</button>
</form>
<br>
<a href="/myproject/index.php">Go to main menu</a>


</body>
</html>