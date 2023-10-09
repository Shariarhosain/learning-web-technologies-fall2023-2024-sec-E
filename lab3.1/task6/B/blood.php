
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="blood.php" method="post">
           Blood Group:
            <select name="blood">
                <option value="A+">A+</option>         
                <option value="A-">A-</option>
                <option value="B+">B+</option>  
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>   
                </select>
    
        
           
      <input type="submit" value="Submit">
        </form>

        <p>
<?php
    if(isset($_POST['blood'])){
        $blood = $_POST['blood'];

        echo "Selected Blood Group: ".$blood;
    }
?>
</p>
    </body>
    </html>
</body>
</html>