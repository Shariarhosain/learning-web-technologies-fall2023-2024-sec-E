


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="degrees .php" method="post">
<fieldset style="width: 30%;">
    <legend>DEGREES</legend>
    <input type="checkbox" name="ssc" value="SSC" <?php  if(isset($_POST['ssc'])){
        echo "checked";
    }?>/>SSC 
    <input type="checkbox" name="hsc" value="HSC" <?php  if(isset($_POST['hsc'])){
        echo "checked";
    }?>/>HSC 
    <input type="checkbox" name="bsc" value="BSc" <?php  if(isset($_POST['bsc'])){
        echo "checked";
    }?>/>BSC
    <input type="checkbox" name="msc" value="MSc"<?php  if(isset($_POST['msc'])){
        echo "checked";
    }?>/>MSC <br>
    <hr>
    <input type="submit" name="submit" value="Submit"/>
</fieldset>
    </form>
 
</body>
</html>