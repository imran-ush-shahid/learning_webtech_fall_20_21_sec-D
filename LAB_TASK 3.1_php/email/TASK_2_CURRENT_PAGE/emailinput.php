<?php
	
	

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['email'];
		
		if($name == ""){
			echo " field required...";
		}else{
			echo  $name;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post" action="emailinput.php" >
		<fieldset>
			<legend>Email</legend>
			<input type="email" name="email" value=" ">
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>