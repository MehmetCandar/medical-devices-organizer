<?php 

include "config.php";

if (isset($_POST['tcid'])){

$selection_tcid = $_POST['tcid'];
$selection_did = $_POST['did'];

$sql_statement = "DELETE FROM works_on WHERE tcid = $selection_tcid AND did = $selection_did";

$result = mysqli_query($db, $sql_statement);

header ("Location: delete_workson.php");

}

else
{

	echo "The form is not set.";

}

?>