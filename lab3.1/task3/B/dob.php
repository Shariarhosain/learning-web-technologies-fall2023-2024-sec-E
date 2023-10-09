

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   
<form action="dob.php" method="post">
    

    <fieldset style="width: 20%;">
      <legend> <p>Date of Birth</p></legend>
      <label for="dd" style="padding-left: 30px;" >dd</label>
      <label for="mm" style="padding-left: 50px;">mm</label>
      <label for="yyyy" style="padding-left: 50px;">yyyy</label><br>
      <input type="number" name="dd" id="dd" min="1" max="31">/
      <input type="number" name="mm" id="mm" min="1" max="12">/
      <input type="number" name="yyyy" id="yyyy" min="1900" max="3000">

      <br>
<hr>
<input type="submit" value="Submit">
    </fieldset>

</form>

    <p> 
        <?php    
       
       if(isset($_POST['dd']) && isset($_POST['mm']) && isset($_POST['yyyy'])){
        echo "Input DOB: {$_POST['dd']}/{$_POST['mm']}/{$_POST['yyyy']}";
    }
    ?>
</p>
</body>
</html>
