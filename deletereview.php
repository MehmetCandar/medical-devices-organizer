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
	<th>Cid</th>
	<th>Date</th>
	<th>Notes</th>
  </tr>
  





<?php

include "config.php";

$sql_statement = "SELECT * FROM reviews";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
	$tcid = $row['tcid'];
	$did = $row['did'];
	$cid = $row['cid'];
	$date = $row['date'];
	$notes = $row['notes'];
	echo "<tr><th>" . $tcid . "</th><th>" . $did . "</th><th>" . $cid . "</th><th>" . $date . "</th><th>" . $notes . "</th></tr>";
}
?>
</table>
<br>
<b>Enter to be deleted review's primary key.</b>
<form action="deletereview2.php" method="POST">
	<input type="text" name="tcid" placeholder="Type tcid"><br>
	<input type="text" name="did" placeholder="Type did"><br>
	<input type="text" name="cid" placeholder="Type cid"><br>
	<button>send</button>
</form>
<br>
<a href="/myproject/index.php">Go to main menu</a>


</body>
</html>