<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<?php
			session_start();
		?>
		<form name="Login" action="LoginHandler.php" method="post" >
			<table>
				<tr>
				<td><b>Username</td>
				<td>: <input type="text"  name="un">
				</tr>
				<tr>
				<td><b>Password</td>
				<td>: <input type="text"  name="ps">
				</tr>
				<tr>
				<td> </td>
				<td><input type="submit" name="submit"> <input type="reset" name="Cancel"></td>
			</table>
		</form>
	</body>
</html>