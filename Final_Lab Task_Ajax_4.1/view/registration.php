<html>
<head>
	<title>Index Page</title>
</head>
<body>
    <table width="900px"border="1" aligen="center">
    <tr>
        <td width="100px"><img src="x.jpg"width=100px" height="100px"></td>
        <td colspan="2" align="center">
            <a href="home.php">HOME</a>
            <a href="login.php">Login</a>
            <a href="registration.php">Registration</a>
        </td>
    </tr>

	<table width="400px" border="1" cellspacing="0">

		<tr height="50px">
			<td colspan="3" align="center">
				<h1>Registration</h1>
			</td>
        </tr>
        <tr height="35px">
            <td width="70px" >
                 Name
            </td>

            <td width="200px">
                <input type="text" name="first_name"  > <br>
           </td>
            <td width="25px">
                <h4 align="left" ></h4>
                 
            </td>   
        </tr>
        <tr height="30px">
            <td width="70px" >
                 Email
            </td>

            <td width="200px">
                <input type="email" name="email"  ><br>
           </td>
            <td width="25px">
                <h4 align="left" ></h4>
                 
            </td>   
        </tr>
        <tr height="35px">
            <td width="70px" >
                 UserName
            </td>

            <td width="200px">
                <input type="text" name="name"  > <br>
           </td>
            <td width="25px">
                <h4 align="left" ></h4>
                 
            </td>   
        </tr>

        <tr height="35px">
            <td width="70px" >
                 password
            </td>

            <td width="200px">
                <input type="text" name="password"  > <br>

           </td>
            <td width="25px">
                <h4 align="left" ></h4>
                 
            </td>   
        </tr>

        <tr height="35px">
            <td width="70px" >
                 confirm password
            </td>

            <td width="200px">
                <input type="text" name="password"  > <br>
           </td>
            <td width="25px">
                <h4 align="left" ></h4>
                 
            </td>   
        </tr>


        <tr height="30px">
            <td width="70px" >
                 Gender
            </td>

            <td width="200px">
                <input type="radio" name="gender"  > Male 
				<input type="radio" name="gender"  > Female
				<input type="radio" name="gender"  > other <br>
           </td>
            <td width="25px">
                <h4 align="left" ></h4>
                 
            </td>   
        </tr>
        <tr height="30px">
            <td width="70px" >
                 Date of Birth
            </td>

            <td width="200px">
                <input type="date" name="dob"  > <br>
           </td>
            <td width="25px">
                <h4 align="left" ></h4>
                 
            </td>   
        </tr>
        <tr height="30px">
            <td width="70px" >
                 Blood Group
            </td>

            <td width="200px">
                <select name="blood_group" >
                    <option value=""selected>A+</option>
                    
                    <option value="">A-</option>
                    <option value="">B+</option>
                    <option value="">B-</option>
                     <option value="">O+</option>
                    <option value="">O-</option>
                     <option value="">AB+</option>
                    <option value="">AB-</option><br>
              
                </select>
           </td>
            <td width="25px">
                <h4 align="left" ></h4>
                 
            </td>   
        </tr>
        <tr height="30px">
            <td width="70px" >
                  Degree
            </td>

            <td width="200px">
                <input type="checkbox" name="dept"> SSC
			    <input type="checkbox" name="dept"> HSC
			    <input type="checkbox" name="dept"> BSc
			    <input type="checkbox" name="dept"> Msc <br>	     
           </td>
            <td width="25px">
                <h4 align="left" ></h4>
                 
            </td>   
        </tr>
        <tr height="30px">
            <td width="70px" >
                 Photo
            </td>

            <td colspan="2" width="200px">
                <input type="file" name="img"  > <br>
           </td>
                  
        </tr>
        <tr height="40px">
			<td colspan="3" align="center">
				 
			</td>
        </tr>
        <tr height="40px">
			<td colspan="3" align="right">
                <input type="submit" name="" value="submit">
		        <input type="reset" name="" value="reset"> <br>
				 
			</td>
        </tr>
        <tr height="50px">
        <td colspan="3" align="center">
            copyright@2017
        </td>
    </tr>
</table>
	</table>
</body>
</html>