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
if (isset($_POST['query'])){

$selection_query = $_POST['query'];


$sql_statement = "SELECT * FROM orders WHERE $selection_query";

$result = mysqli_query($db, $sql_statement);



}

else
{

	echo "The form is not set.";

}
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

<br>
<a href="/myproject/selectorders.php">Go to order selection</a>


</body>
</html>