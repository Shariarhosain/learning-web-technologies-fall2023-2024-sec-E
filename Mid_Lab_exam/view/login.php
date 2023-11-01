<?php
session_start();

if(isset($_SESSION['message'])){
	if($_SESSION['message'] = "fail"){
		echo "User not exists";
	
	}

	unset($_SESSION['message']);
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
</head>
<body>
<form action="../controller/logincheck.php" method="post">
	
				<fieldset style="width:30%;">
					<legend><h3>LOGIN</h3></legend>
					User Id<br>
					<input type="text" name="id" required><br/>                               
					Password<br>
					<input type="password" name="password" required/>
					<br ><hr>
					<input type="submit"  name="submit" value="Login">||<a href="registration.php">Register</a>
				</fieldset>
			
</form>
</body>
</html>