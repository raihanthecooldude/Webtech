<!DOCTYPE html>
<html>
<head>
	<title>Word Counter</title>
	
	<style>
		body
		{
			text-align: center;
		}

		#TopLabel
		{
			font-family: calibri;
			font-size: 36px;
		}

		#UpLabel
		{
			font-family: calibri;
		}

		#CountBtn
		{
			background-color: #4caf50;
			border-radius: 4px;
			border: 1px solid #009933;
			padding: 10px 14px;

			color: white;
			font-family: Calibri;
			font-size: 16px;

			transition-duration: 0.4s;
		}

		#CountBtn:hover
		{
			background-color: white;
			border: 2px solid #4caf50;

			color: black;
		}

		#ClearBtn
		{
			background-color: #ff9933;
			border-radius: 4px;
			border: 1px solid #ff8000;
			padding: 10px 16px;

			color: white;
			font-family: Calibri;
			font-size: 16px;

			transition-duration: 0.4s;
		}

		#ClearBtn:hover
		{
			background-color: white;
			border: 2px solid #ff9933;

			color: black;
		}

	</style>
</head>
<body>
	<form name="InputPage" method="post" action="result.php">
		<br><br><br><br>
		<!--<p id="TopLabel">Character Frequency Counter</p><hr><br>-->
		<img src="CFC.png" id="TopImg" width="800" height="120">
		<p id="UpLabel">Insert your string into the following text area to get the count per character</p>
		<textarea rows="18" cols="100" name="text" value="" autofocus></textarea><br>
		<input type="submit" value="Count" id="CountBtn"> <button type="reset" id="ClearBtn">Clear</button>
	</form>
</body>
</html>