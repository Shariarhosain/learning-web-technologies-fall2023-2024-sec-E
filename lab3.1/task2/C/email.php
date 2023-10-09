<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

  


        
    <form action="email.php" method="post">

        
<fieldset style="width: 30%">
   <legend>EMAIL</legend><br>
   <label for="email">Email:</label>
   <input type="text" id="email" name="email" value="<?php    
       
       if(isset($_POST['email'])){
       echo $_POST['email'];
       
         }?>" placeholder="Enter your mailing address"><br><br>
   <hr>
   <input type="submit" value="Submit">


</fieldset>



    </form>


</body>

</html>