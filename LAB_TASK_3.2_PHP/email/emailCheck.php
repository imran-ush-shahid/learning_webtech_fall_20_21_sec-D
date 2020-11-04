<?php
	$email= $_POST['email'];
	if($email==null){
		header('location:email.php?msg=errorinput');
	}
	else{
		echo $_POST['email'];
	}
?>