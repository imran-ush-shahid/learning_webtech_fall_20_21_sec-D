<html>
    <head><title>Login</title></head>
    <body>
        <table width="900px"border="1" aligen="center">
    <tr>
        <td width="100px"><img src="x.jpg"width="100px" height="100px"></td>
        <td colspan="2" align="center">
            <a href="home.php">HOME</a>
            <a href="login.php">Login</a>
            <a href="registration.php">Registration</a>
        </td>
    </tr>
        <fieldset>
            <legend><b>LOGIN</b></legend>
            <form action="logincheck.php" method="POST">  
        
                    <tr>
                        <td>User Name</td>
                        <td>:</td>
                        <td><input type="text" name="userName"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                
                
                    <td>
                <input name="remember" type="checkbox">Remember Me
                
                <br/><br/>
                <input type="submit" name="submit" value="Submit">    
            
        
                <a href="forgot_password.html">Forgot Password?</a>
            </td>
            
        <tr height="50px">
        <td colspan="3" align="center">
            copyright@2017
        </td>
    </tr>
         </form>
        </fieldset>
</table>
    </body>
</html>
