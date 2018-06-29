<html>
<body>
	<form name="LoginPage" method="post" action="LogUser.php">
		<p>
			Username : <input type="text" name="un" value=""><br/>
			Password : <input type="password" name="ps" value=""><br/>
			<input type="submit" name="Submit"><br/><br/>
		</p>

<?php
	//$_SESSION['count']=null;
	session_start();
	//$_SESSION['count'];
	if(!isset($_SESSION['count']))
	{
		// echo "null";
		// echo "";
		scho "";
	}
	else
	{
		//echo $_SESSION['count'];
		//var_dump($_S)
		if($_SESSION['count']=='a')
		{
			echo "Invalid username or password\n";
		}
		else if ($_SESSION['count']=='b')
		{
			echo "You have been logged out\n";
			session_destroy(); //destroy entire session
		}
	}
	
?>
	</form>
</body>
</html>