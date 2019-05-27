<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<form name="Login" action="res.php" method="post" >

			<?php
				session_start();
				$_SESSION['duno']=$_POST['un'];
				$_SESSION['dunio']=$_POST['ps'];
			?>
			<table>
				<tr>
					<td><b>age</td>
					<td>: <input type="text"  name="ag">
				</tr>
				<tr>
					<td> </td>
					<td><input type="submit" name="submit"> <input type="reset" name="Cancel"></td>
				</tr>
			</table>
		</form>
	</body>
</html>