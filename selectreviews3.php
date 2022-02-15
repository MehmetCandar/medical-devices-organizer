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

if (isset($_POST['query'])){

$selection_query = $_POST['query'];

$sql_statement = "SELECT * FROM reviews WHERE $selection_query";

$result = mysqli_query($db, $sql_statement);



}

else
{

	echo "The form is not set.";

}

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

<br>
<a href="/myproject/selectreviews.php">Go to review selection</a>


</body>
</html>