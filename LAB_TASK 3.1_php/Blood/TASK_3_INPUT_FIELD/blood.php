<?php

$blood = "";

if(isset($_POST['submit'])){
    $blood = $_REQUEST['blood'];
}

else{
    $blood = "";
}

?>





<!DOCTYPE html>
<html>
<head>
	<title>blood</title>
</head>
<body>

	<form  method ="post">
<fieldset>
	<legend>Blood</legend>
		Blood group: 
			<select name="Blood" >
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
				
				<option value="A+" selected >A+</option>
			</select> <br>
				<input type="submit" name="submit" value="submit"> <br>


</fieldset>

		</form>
</body>
</html>
