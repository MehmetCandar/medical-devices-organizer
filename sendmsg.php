<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

include "config.php";

if(isset($_POST['name'])){

$tcid = $_POST['tcid'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$wage = $_POST['wage'];
$birthdate = $_POST['birthdate'];
$address = $_POST['address'];

echo "Employee with attributes" . $tcid . " " . $name . " " . $surname . " " . $wage . " " . $birthdate . " " . $address . "<br>";

$sql_statement = "INSERT INTO employees(tcid,name,sname,wage,birthdate,address)
					VALUES ($tcid, '$name', '$surname', $wage, $birthdate, '$address')";

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