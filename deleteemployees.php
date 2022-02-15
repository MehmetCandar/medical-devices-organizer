<?php 

include "config.php";

if (isset($_POST['tcid'])){

$selection_id = $_POST['tcid'];

$sql_statement = "DELETE FROM employees WHERE tcid = $selection_id";

$result = mysqli_query($db, $sql_statement);

header ("Location: employees.php");

}

else
{

	echo "The form is not set.";

}

?>