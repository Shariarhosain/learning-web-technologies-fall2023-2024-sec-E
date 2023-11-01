<?php


if(isset($_SESSION['message'])){
	if($_SESSION['message'] = "fail"){
		echo "User already exists";
	
	}

	unset($_SESSION['message']);
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign up</title>
</head>
<body>
	<form action="../controller/signupcheck.php" method="post">
		<fieldset style="width:30%;">
			<legend><h3>REGISTRATION</h3></legend>
			Id<br/><input type="text" name="id" required><br/>
			Password<br/><input type="password"name="password" required><br/>
			Name<br/><input type="text" name="name" required><br/>
			User Type<hr/>
			<input name="user" type="radio"  value="user" required/>User
			<input name="user" type="radio" value="admin"/>Admin
			<hr/>
			<input type="submit" name="submit" value="Sign Up"> || <a href="login.html">Sign In</a>
		</fieldset>
	</form>
</body>
</html>