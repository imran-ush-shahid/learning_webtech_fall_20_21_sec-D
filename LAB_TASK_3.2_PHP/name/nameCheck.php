<?php
	$name= $_POST['name'];
	if($name==null){
		header('location:name.php?msg=errorinput');
	}
	if(strlen($name)<2 && strlen($name)>0){
		header('location:name.php?msg=errorinput');
	}
	if($name>='a' && $name<='z' || $name>='A' && $name<='Z'){
		echo $name;
	}elseif($name!=null){
		header('location:name.php?msg=errorinput');
	}

?>