<?php





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin Dashboard</title>
</head>
<body>



 <br>

 <fieldset style="width:25%">
    <legend> search employers  </legend>

    EmployerName:
        <input type="text" name="ename" id="ename" placeholder="input username " maxlength="3">
        <input type="button" name="click" value="Click" onclick="ajax()"/>
   
   <div id="show"></div>
 </fieldset>


  
    <script type="text/javascript" src="../javascript/script.js"></script>
</body>
</html>