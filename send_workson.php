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
$since = $_POST['since'];

echo "Works On with attributes" . $tcid . " " . $did . " " . $since . "<br>";

$sql_statement = "INSERT INTO works_on(tcid,did,since)
					VALUES ($tcid, $did, '$since')";

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