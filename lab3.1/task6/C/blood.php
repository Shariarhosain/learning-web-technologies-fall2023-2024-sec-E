
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
            <select name="blood" multiple>
                <option value="A+" <?php    if(isset($_POST['blood'])){
        $blood = $_POST['blood'];
              if($blood == "A+"){
                  echo "selected";
              }
    }
?>>A+</option>         
                <option value="A-" <?php    if(isset($_POST['blood'])){
        $blood = $_POST['blood'];
             if($blood == "A-"){
                  echo "selected";
              }
    }
?>>A-</option>
                <option value="B+" <?php    if(isset($_POST['blood'])){
        $blood = $_POST['blood'];
 if($blood == "B+"){
                  echo "selected";
              }
    }
?>>B+</option>  
                <option value="B-" <?php    if(isset($_POST['blood'])){
        $blood = $_POST['blood'];

        if($blood == "B-"){
                  echo "selected";
              }
    }
?>>B-</option>
                <option value="AB+" <?php    if(isset($_POST['blood']) && $_POST['blood'] == "AB+"){
        $blood = $_POST['blood'];

        if($blood == "AB+"){
                  echo "selected";
              }
    }
?>>AB+</option>   
                </select>
    
        
           
      <input type="submit" value="Submit">
        </form>

    
 

    </body>
    </html>
</body>
</html>