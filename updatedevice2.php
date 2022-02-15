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

if (isset($_POST['did'])){

$selection_attribute = $_POST['attribute'];
$selection_value = $_POST['value'];
$selection_did = $_POST['did'];

$sql_update = "UPDATE devices SET $selection_attribute = '$selection_value' WHERE did = $selection_did";
$sql_statement = "SELECT * FROM devices WHERE $selection_attribute = '$selection_value'";

$update = mysqli_query($db, $sql_update);
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
<a href="/myproject/updatedevice.php">Go to device update</a>


</body>
</html>