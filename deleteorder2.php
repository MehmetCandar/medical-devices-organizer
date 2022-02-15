<?php 

include "config.php";

if (isset($_POST['cid'])){

$selection_cid = $_POST['cid'];
$selection_did = $_POST['did'];

$sql_statement = "DELETE FROM orders WHERE cid = $selection_cid AND did = $selection_did";

$result = mysqli_query($db, $sql_statement);

header ("Location: deleteorder.php");

}

else
{

	echo "The form is not set.";

}

?>