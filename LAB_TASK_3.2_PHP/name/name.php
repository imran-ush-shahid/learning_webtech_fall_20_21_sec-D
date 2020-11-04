<?php
if(isset($_GET['msg'])){
	echo "invalid request";
}

?>

<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="POST" action="nameCheck.php">
		Name: 
		<input type="text" name="name"> <br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>