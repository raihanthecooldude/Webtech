<!DOCTYPE html>
<html>
<head>
	<title>Read File</title>
</head>
<body>
	<h2>Hello</h2>
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