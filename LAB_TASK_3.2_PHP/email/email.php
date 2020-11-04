<?php
if(isset($_GET['msg'])){
	echo "invalid request";
}
?>

<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="POST" action="emailCheck.php">
		Email:
		<input type="email" name="email"> <br>
		<input type="submit" value="Submit">
	</form>
</body>
</html