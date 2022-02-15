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
    <th>Cid</th>
	<th>CName</th>
	<th>CSurname</th>
	<th>Sex</th>
    <th>Hospital</th>
  </tr>
  





<?php

include "config.php";

$sql_statement = "SELECT * FROM customers";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
	$cid = $row['cid'];
	$cname = $row['cname'];
	$csname = $row['csname'];
	$sex = $row['sex'];
	$hospital = $row['hospital'];
	echo "<tr><th>" . $cid . "</th><th>" . $cname . "</th><th>" . $csname . "</th><th>" . $sex . "</th><th>" . $hospital . "</th></tr>";
}
?>
</table>
<br>
<b>Enter to be deleted customer's id.</b>
<form action="deletecustomer2.php" method="POST">
	<input type="text" name="cid" placeholder="Type cid"><br>
	<button>send</button>
</form>
<br>
<a href="/myproject/index.php">Go to main menu</a>


</body>
</html>