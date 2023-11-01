
<?php 

session_start();
require_once "../model/databaseFunction.php";


if(!isset($_SESSION['flag'])){
	header('location: ../view/login.php');
}


?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>profile</title>
</head>
<body>
	<table border="1" style="width:30%" cellspacing="0" cellpadding="0">
		<tr>
			<td colspan="2" align="center">Profile</td>
		</tr>
		<tr>
			<td>ID</td>
			<td><?php echo $_SESSION['id'] ?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?php echo $_SESSION['name'] ?></td>
		</tr>
		<tr>
			<td>User Type</td>
			<td><?php echo $_SESSION['user'] ?></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><a href="admin_home.php">Go Home</a></td>
		</tr>
	</table>
	
</body>
</html>