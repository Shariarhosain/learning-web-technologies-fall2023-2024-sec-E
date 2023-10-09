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

    <legend >Gender</legend>
        <input type="radio" name="gender" value="male" /> Male
        <input type="radio"  name="gender" value="female"  /> Female
        <input type="radio"  name="gender" value="other" /> Other <br>
<hr>
<input type="submit" value="Submit">
       </fieldset>
       
   </form>
<p>

<?php

if(isset($_POST['gender'])){
    echo "Selected gender:" .$_POST['gender'];
}

?>

</p>
</body>
</html>
