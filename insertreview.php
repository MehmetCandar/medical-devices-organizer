<!DOCTYPE html>
<html>
<head>
	<title>Insert Review</title>
</head>
<body>
<div align="center">
<b>Insert Review Form</b>
<br>
<br>
<br>
Enter attributes
<br>
<form action="sendreview.php" method="POST">
	<input type="text" name="tcid" placeholder="Type tcid"><br>
	<input type="text" name="did" placeholder="Type did"><br>
	<input type="text" name="cid" placeholder="Type cid"><br>
	<input type="text" name="date" placeholder="Type date"><br>
	<textarea name="notes" placeholder="Type notes"></textarea><br>
	<button>send</button>
	
</form>

<a href="/myproject/index.php">Go to main menu</a>
</div>



</body>
</html>