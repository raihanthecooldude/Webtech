<!DOCTYPE html>
<html>
<head>
	
	<title>Video</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div class="player">
		<video class="video-player" id="video-player" width="500" controls>
			<source src="#" type="video/mp4">
		</video>
	</div>
	<div class="button">
		<form>
			<!-- <input type="text" name="files" class="files" readonly> -->

			<table>
				<tr>
					<span id="hello"></span>
				</tr>
			</table>
			<br><br><br>
			<input type="file" name="video" accept="video/*" onchange="loadFile(event)"><br><br>
			<button class="upload">Upload</button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <button type="reset" name="reset" class="reset">Reset</button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <button class="play">Play</button>
		</form>
	</div>

</body>
<script>
  	var loadFile = function(event)
  	{
    	var output = document.getElementById('video-player');
    	output.src = URL.createObjectURL(event.target.files[0]);
	}
</script>
</html>