

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="name.php" method="post">

        
<fieldset style="width: 30%">
   <legend>NAME</legend><br>
   <label for="name">Name:</label>
   <input type="text" id="name" name="name" value="<?php    
       
       if(isset($_POST['name'])){
       echo $_POST['name'];
       
         }?>" placeholder="Enter your Name"><br><br>
   <hr>
   <input type="submit" value="Submit">


</fieldset>
        </form>
  
</body>
</html>
