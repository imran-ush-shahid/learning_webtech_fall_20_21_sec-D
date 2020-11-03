<?php
	
	$data = "";

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['email'];
		
		if($name == ""){
			echo " field required...";
		}else{
			$data = $name;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend>Email</legend>
			<input type="email" name="email" value=" <?=$data ?>">
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>