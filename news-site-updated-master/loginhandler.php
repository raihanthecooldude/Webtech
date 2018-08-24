<?php
	session_start();
	
	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$un = $_POST['un'];
		$pw = $_POST['pw'];
		$_SESSION['un'] = $un;
		
		require'config.php';
		
		$statement = "select * from account WHERE username = '$un' and password = '$pw'";
		
		$result = mysqli_query($conn, $statement);
		
		if (mysqli_num_rows($result) > 0)
		{
			header("location:index.php");
		}
		else
		{
			header("location:viewdata2.php");
		}
	}
?>