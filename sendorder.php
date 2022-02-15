<!DOCTYPE html>
<html>
<head>
</head>
<body>



<?php

include "config.php";

if(isset($_POST['cid'])){

$cid = $_POST['cid'];
$did = $_POST['did'];
$date = $_POST['date'];

echo "Works On with attributes" . $cid . " " . $did . " " . $date . "<br>";

$sql_statement = "INSERT INTO orders(cid,did,date)
					VALUES ($cid, $did, '$date')";

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