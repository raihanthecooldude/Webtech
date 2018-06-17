<html>
	<head>
		<title>Login Handler</title>
	</head>
	<body>
	<?php
		$un=$_POST['un'];
		$ps=$_POST['ps'];
		
		echo "Username : ".$un."<br>";
		echo "Password : Hi ".$un."<br>";
		echo "Real Password : ".$ps."<br>";
		
		for($i=1;$i<5;$i++)
		{
			echo $i."\n";
		}
	?>
	</body>
</html>