<!DOCTYPE html>
<html>
<head>
	<title>Update Devices</title>
</head>
<body>
<div align="center">
<b>Update Devices Form</b>
<br>
<br>
<br>
<h2>Enter Update</h2>
<br>

<form action="updatedevice2.php" method="POST">
	<b>UPDATE </b> 
	devices
	<b> SET </b>
	<input type="text" name="attribute" placeholder="Type attribute">
	=
	<input type="text" name="value" placeholder="Type value">
	<b> WHERE </>
	did = 
	<input type="text" name="did" placeholder="Type did">
	<br><br>
	<button>send</button>
	
</form>
<br>
<a href="/myproject/index.php">Go to main menu</a>
</div>



</body>
</html>