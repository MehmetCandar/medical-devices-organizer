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
    <th>Tcid</th>
	<th>Did</th>
	<th>Since</th>
  </tr>
  





<?php

include "config.php";

$sql_statement = "SELECT * FROM works_on";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
	$tcid = $row['tcid'];
	$did = $row['did'];
	$since = $row['since'];
	echo "<tr><th>" . $tcid . "</th><th>" . $did . "</th><th>" . $since . "</th></tr>";
}
?>
</table>
<br>
<b>Enter to be deleted works_on's primary key.</b>
<form action="delete_workson2.php" method="POST">
	<input type="text" name="tcid" placeholder="Type tcid"><br>
	<input type="text" name="did" placeholder="Type did"><br>
	<button>send</button>
</form>
<br>
<a href="/myproject/index.php">Go to main menu</a>


</body>
</html>