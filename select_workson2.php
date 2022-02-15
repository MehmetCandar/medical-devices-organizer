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

if (isset($_POST['attribute'])){

$selection_attribute = $_POST['attribute'];
$selection_value = $_POST['value'];

$sql_statement = "SELECT * FROM works_on WHERE $selection_attribute = '$selection_value'";

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
	$since = $row['since'];
	echo "<tr><th>" . $tcid . "</th><th>" . $did . "</th><th>" . $since . "</th></tr>";
}
?>
</table>
<br>

<br>
<a href="/myproject/select_workson.php">Go to works on selection</a>


</body>
</html>