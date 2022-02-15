<?php 

include "config.php";

if (isset($_POST['did'])){

$selection_id = $_POST['did'];

$sql_statement = "DELETE FROM devices WHERE did = $selection_id";

$result = mysqli_query($db, $sql_statement);

header ("Location: deletedevice.php");

}

else
{

	echo "The form is not set.";

}

?>