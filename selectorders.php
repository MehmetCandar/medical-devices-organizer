<!DOCTYPE html>
<html>
<head>
	<title>Select Orders</title>
</head>
<body>
<div align="center">
<b>Select Order Form</b>
<br>
<br>
<br>
<h2>Enter Query</h2>
<br>

<form action="selectorders2.php" method="POST">
	<b>SELECT FROM </b> 
	orders
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
<form action="selectorders3.php" method="POST">
	<b>SELECT FROM </b> 
	orders
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