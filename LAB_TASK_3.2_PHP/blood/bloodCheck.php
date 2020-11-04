<?php
	if($_POST['Blood_group']=="none"){
		header('location:blood.php?msg=errorinput');
	}
	else{
		echo $_POST['Blood_group'];
	}
?>