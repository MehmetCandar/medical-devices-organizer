<!DOCTYPE html>
<html>
<head>
	<title>Select Customers</title>
</head>
<body>
<div align="center">
<b>Select Customer Form</b>
<br>
<br>
<br>
<h2>Enter Query</h2>
<br>

<form action="selectcustomers2.php" method="POST">
	<b>SELECT FROM </b> 
	customers
	<b> WHERE </b>
	<input type="text" name="attribute" placeholder="Type attribute">
	=
	<input type="text" name="value" placeholder="Type value"><br><br>
	<button>send</button>
	
</form>
<br>
<br>
<h2>Enter Advanced Query</h2>
<br>
<form action="selectcustomers3.php" method="POST">
	<b>SELECT FROM </b> 
	customers
	<b> WHERE </b>
	<textarea name="query" placeholder="Type query"></textarea>
	<br><br>
	<button>send</button>
	
</form>
<br>
<a href="/myproject/index.php">Go to main menu</a>
</div>



</body>
</html>