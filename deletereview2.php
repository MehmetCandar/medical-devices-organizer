<?php 

include "config.php";

if (isset($_POST['cid'])){

$selection_tcid = $_POST['tcid'];
$selection_did = $_POST['did'];
$selection_cid = $_POST['cid'];

$sql_statement = "DELETE FROM reviews WHERE tcid = $selection_tcid AND did = $selection_did AND cid = $selection_cid";

$result = mysqli_query($db, $sql_statement);

header ("Location: deletereview.php");

}

else
{

	echo "The form is not set.";

}

?>