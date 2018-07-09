<html>
	<head>
		<title>Login Handler</title>
	</head>
	<body>
	<?php
		session_start();
		$_SESSION['dub']=$_POST['ag'];
		
		echo "Username : ".$_SESSION['duno']."<br>";
		echo "Real Password : ".$_SESSION['dunio']."<br>";
		echo "Age : ".$_SESSION['dub'];
		
	?>
	</body>
</html>