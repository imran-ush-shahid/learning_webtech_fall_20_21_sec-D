<?php
	
	

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['Degree'];
		
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
	<title>Degree</title>
</head>
<body>

	<form method ="post" action="degreeinput.php">
<fieldset>
	<legend>Degree</legend>
Degree:
			<input type="radio" name="Degree" value="SSC"> SSC
			<input type="radio" name="Degree" value="HSC"> HSC
			<input type="radio" name="Degree" value="BSc"> BSc
			<input type="radio" name="Degree" value="Msc"> Msc
			 <br>
			 	<input type="submit" name="submit" value="submit"> <br>

</fieldset>
		</form>
</body>
</html>
