<?php
if(isset($_GET['msg'])){
	echo "invalid request";
}

?>

<html>
    <head>
<title>Gernder</title>
</head>
    <body>
        <form method="POST" action="genderCheck.php">
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender"value="Male">Male
                <input type="radio" name="gender"value="Female">Female
                <input type="radio" name="gender"value="Other">Other
            </fieldset>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>