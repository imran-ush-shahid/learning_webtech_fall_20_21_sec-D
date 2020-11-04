<?php
if(isset($_GET['msg'])){
	echo "Select atleast 1 degree...";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Degree</title>
</head>
<body>

	<form method ="post" action="degreeCheck.php">
<fieldset>
	<legend>Degree</legend>
Degree:
			<input type="radio" name="Degree" value="SSC"> SSC
			<input type="radio" name="Degree" value="HSC"> HSC
			<input type="radio" name="Degree" value="BSc"> BSc
			<input type="radio" name="Degree" value="Msc"> Msc
			 <br>
			 	<input type="submit" name="" value="submit"> <br>

</fieldset>
		</form>
</body>
</html>