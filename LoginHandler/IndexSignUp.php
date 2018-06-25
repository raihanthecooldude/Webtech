<html>
	<head>
		<title>Sign Up</title>
	</head>
	<body>
		<form>
			<h1>Sign Up</h1>
			<h3>It's free and always will be.</h3>
			<table border="1">
				<tr>
					<td><input type="text" name="fs" placeholder="First Name"></td>
					<td><input type="text" name="ls" placeholder="Last Name"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="email" placeholder="Your Email"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="remail" placeholder="Re-enter Email"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="pw" placeholder="New Password"></td>
				</tr>
			</table>
			<h2>Birthday:</h2><br/>
			<select>
				<option value="month">Month</option>
				<option value="jan">January</option>
				<option value="feb">February</option>
				<option value="mar">March</option>
				<option value="apr">April</option>
				<option value="may">May</option>
				<option value="june">June</option>
				<option value="july">July</option>
				<option value="aug">August</option>
				<option value="sep">September</option>
				<option value="oct">October</option>
				<option value="nov">November</option>
				<option value="dec">December</option>
				
				
			</select>
			<select>
				<option value="day">Day</option>
				<?php
					for($i=1;$i<=31;$i++)
					{
						echo "<option value='day$i'>$i</option>";
					}
				?>
			</select>
			<select>
				<option value="year">Year</option>
				<?php
					for($i=1900;$i<=2018;$i++)
					{
						echo "<option value='year$i'>$i</option>";
					}
				?>
			</select>
			<a href="">Why do I need to provide my birthday?</a><br/>
			<br/>
			<h3>
				<input type="radio" name="gender" value="f">Female
				<input type="radio" name="gender" value="m">Male<br/>
			</h3><br/>
			
			<p>By clicking Sign Up, you agree to our <a href="">Terms</a>and that you<br/>have read our <a href="">Data Use Policy</a>, including our <a href="">Cookie Use</a>.
		</form>
	</body>
</html>