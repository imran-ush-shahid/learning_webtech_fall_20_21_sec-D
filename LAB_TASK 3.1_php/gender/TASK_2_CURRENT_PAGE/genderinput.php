<?php
	
	

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['gender'];
		
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
	<title>Gender</title>
</head>
<body>

	<form method ="post" action="genderinput.php">
		<fieldset>
			<legend>Gender</legend>
		Gender: <input type="radio" name="gender" value="male"> Male 
				<input type="radio" name="gender" value="Female"> Female
				<input type="radio" name="gender" value="other"> other <br>
				<input type="submit" name="submit" value="submit"> <br>

			</fieldset>









		</form>
</body>
</html>
