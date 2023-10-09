<?php

$gender = '';
if(isset($_REQUEST['submit'])){
    $gender = $_REQUEST['gender'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="gender.php" method="post">
        <fieldset style=" width:20%;">
            <legend>Gender</legend>
            <input type="radio" name="gender" value="male" id="" <?php if($gender === "male"){ echo "checked"; }?>> Male
            <input type="radio" name="gender" value="female" id="" <?php if($gender === "female"){ echo "checked"; }?>> Female
            <input type="radio" name="gender" value="other" id="" <?php if($gender === "other"){ echo "checked"; }?>> Other
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html