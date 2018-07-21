<!DOCTYPE html>
<html>
<head>
	<title>Read File</title>
</head>
<body>
	<h2>Read The Files</h2>
	<hr>

<?php
	foreach (glob("fello/*") as $file)
	{
		foreach (file($file) as $f)
		{
			echo $f."<br>";
		}

		echo "<hr>";
	}
?>
</body>
</html>