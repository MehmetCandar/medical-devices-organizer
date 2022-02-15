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
	<th>Did</th>
	<th>Date</th>
  </tr>
  





<?php

include "config.php";

$sql_statement = "SELECT * FROM orders";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
	$cid = $row['cid'];
	$did = $row['did'];
	$date = $row['date'];
	echo "<tr><th>" . $cid . "</th><th>" . $did . "</th><th>" . $date . "</th></tr>";
}
?>
</table>
<br>
<b>Enter to be deleted order's primary key.</b>
<form action="deleteorder2.php" method="POST">
	<input type="text" name="cid" placeholder="Type cid"><br>
	<input type="text" name="did" placeholder="Type did"><br>
	<button>send</button>
</form>
<br>
<a href="/myproject/index.php">Go to main menu</a>


</body>
</html>