<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

include "config.php";

if(isset($_POST['did'])){

$did = $_POST['did'];
$deadline = $_POST['deadline'];
$situation = $_POST['situation'];
$specifications = $_POST['specifications'];

echo "Device with attributes" . $did . " " . $deadline . " " . $situation . " " . $specifications . "<br>";

$sql_statement = "INSERT INTO devices(did,deadline,situation,specifications)
					VALUES ($did, '$deadline', '$situation', '$specifications')";

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