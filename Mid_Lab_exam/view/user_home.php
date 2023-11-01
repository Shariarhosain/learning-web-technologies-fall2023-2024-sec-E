
<?php
session_start();

if(!isset($_SESSION['flag'])){
	header('location: ../view/login.html');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>admin dashboard</title>
</head>
<body>
<center>
	<h1>Welcome <?php echo $_SESSION['name']; ?></h1>
	<a href="profile.php">Profile</a>
	<br/>
	<a href="change_password.html">Change Password</a>
	
	<br/>
	<a href="../controller/logoutcheck.php">Logout</a>
</center>
</body>
</html>