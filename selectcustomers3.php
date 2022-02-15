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

if (isset($_POST['query'])){

$selection_query = $_POST['query'];


$sql_statement = "SELECT * FROM customers WHERE $selection_query";

$result = mysqli_query($db, $sql_statement);



}

else
{

	echo "The form is not set.";

}
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
<br>
<a href="/myproject/selectcustomers.php">Go to customer selection</a>


</body>
</html>