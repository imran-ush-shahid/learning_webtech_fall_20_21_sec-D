<?php
	if(!isset($_POST['Degree'])){
		header('location:degree.php?msg=errorinput');
	}

	else{
		echo $_POST['Degree'];
	}
?>