<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

include "config.php";

if(isset($_POST['cname'])){

$cid = $_POST['cid'];
$cname = $_POST['cname'];
$csurname = $_POST['csurname'];
$sex = $_POST['sex'];
$hospital = $_POST['hospital'];

echo "Customer with attributes " . $cid . " " . $cname . " " . $csurname . " " . $sex . " " . $hospital . "<br>";

$sql_statement = "INSERT INTO customers(cid,cname,csname,sex,hospital)
					VALUES ($cid, '$cname', '$csurname', '$sex', '$hospital')";

$result = mysqli_query($db, $sql_statement);

echo "Myresult is: " . $result;

}

else
{
echo "The form is not set.";
}
?>
<br>
<a href="/myproject/index.php">Go to main menu</a>
</body>
</html>