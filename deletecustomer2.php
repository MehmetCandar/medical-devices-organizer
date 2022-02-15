<?php 

include "config.php";

if (isset($_POST['cid'])){

$selection_id = $_POST['cid'];

$sql_statement = "DELETE FROM customers WHERE cid = $selection_id";

$result = mysqli_query($db, $sql_statement);

header ("Location: deletecustomer.php");

}

else
{

	echo "The form is not set.";

}

?>
