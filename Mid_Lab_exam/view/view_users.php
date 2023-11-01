<?php
session_start();
require_once "../model/databaseFunction.php";
if(!isset($_SESSION['flag'])){
	header('location: ../view/login.html');
}
else{
	$result=showall();
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>show all</title>
</head>
<body>
	<table border="1" style="width:30%" cellspacing="0" cellpadding="0">
         <tr>
			 <td colspan="4" align="center">Users</td>
		 </tr>
		 <tr>
			 <td>ID</td>
			 <td>NAME</td>
			 <td>USER TYPE</td>
			
		</tr>
		<?php foreach($result as $row): ?>
		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['user'] ?></td>
			</tr>
			<?php endforeach; ?>
			<tr>
				<td colspan="4" align="right"><a href="admin_home.php">Go Home</a></td>
			</tr>

	</table>
	
</body>
</html>