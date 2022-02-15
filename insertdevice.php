<!DOCTYPE html>
<html>
<head>
	<title>Insert Device</title>
</head>
<body>
<div align="center">
<b>Insert Device Form</b>
<br>
<br>
<br>
Enter attributes
<br>
<form action="senddevice.php" method="POST">
	<input type="text" name="did" placeholder="Type device id"><br>
	<input type="text" name="deadline" placeholder="Type deadline"><br>
	<input type="text" name="situation" placeholder="Type situation"><br>
	<textarea name="specifications" placeholder="Type specifications"></textarea><br>
	<button>send</button>
	
</form>

<a href="/myproject/index.php">Go to main menu</a>
</div>



</body>
</html>