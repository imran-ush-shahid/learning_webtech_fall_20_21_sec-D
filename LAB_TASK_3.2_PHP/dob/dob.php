<?php
if(isset($_GET['msg'])){
	echo "check for invalid credentials";
}

?>
<!DOCTYPE html>
<html>

<head>
    
    <title>Document</title>
</head>

<body>
    <form  method ="post" action="dobokCheck.php">
        <fieldset>
            <legend>DATE OF BIRTH</legend>
            <pre>  dd      mm     yyyy</pre>
            <input type="tel" name="day" size="1" /> /
            <input type="tel" name="month" size="1" /> /
            <input type="tel" name="year" size="2" />
            <hr />
            <input type="submit" value="Submit" name="submit" />
        </fieldset>
    </form>
</body>

</html>