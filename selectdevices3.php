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

if (isset($_POST['query'])){

$selection_query = $_POST['query'];


$sql_statement = "SELECT * FROM devices WHERE $selection_query";

$result = mysqli_query($db, $sql_statement);



}

else
{

	echo "The form is not set.";

}

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

<br>
<a href="/myproject/selectdevices.php">Go to device selection</a>


</body>
</html>