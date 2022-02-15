<!DOCTYPE html>
<html>
<head>
</head>
<body>


<?php

include "config.php";

if(isset($_POST['tcid'])){

$tcid = $_POST['tcid'];
$did = $_POST['did'];
$cid = $_POST['cid'];
$date = $_POST['date'];
$notes = $_POST['notes'];


echo "Review with attributes" . $tcid . " " . $did . " " . $cid . " " . $date . " " . $notes . "<br>";

$sql_statement = "INSERT INTO reviews(tcid,did,cid,date,notes)
					VALUES ($tcid, $did, $cid, '$date', '$notes')";

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