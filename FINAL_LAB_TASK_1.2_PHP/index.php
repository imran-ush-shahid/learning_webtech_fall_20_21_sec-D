<!DOCTYPE html>
<html>
<head>
    <title>shop - login</title>
</head>
<body>
    
    <center>
        
        
        <h1>Shop Management System</h1>
        
        <form action="controller/loginCheck.php" method="post">
        
        <input type="text" name="username" placeholder="ID"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" name="submit" value="Submit">
        <a href="view/registration.php"><input type="button" name="signup" value="Sign Up"></a>
        
    </form>
<?php
        
        if(isset($_REQUEST['msg'])){
            
		if($_REQUEST['msg'] == 'null'){
			echo "Please fill up all information";
		}
            
        if($_REQUEST['msg'] == 'invalid_user'){
			echo "Invalid Credentials";
		}
            
            if($_REQUEST['msg'] == 'valid'){
			
                header('location: view/home.php');
		}


		
	}
        
        ?>
        
    </center>
    
</body>
</html>