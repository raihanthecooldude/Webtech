<html>
	<head>
		<title>
			Fsignup
		</title>
		<style>
			::placeholder
			{
			color : darkgray;
			font-size : 20px;
			text-align : center-right;
			padding : 5px;
			font-weight : 600;
			}
			input [type = "text"], input[type=password] 
			{
			border : 1px solid lightgray;
			border-radius : 3px;
			padding : 2px;
			height : 35px
			}
			span
			{
				color : red;
			}
		</style>
	</head>
	<body style = "background-color : lavender">
		<?php
			$nerr = $unerr = $eerr = $perr = $gerr = "";
			$n = $un = $e = $p = $g = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				if (empty($_POST["name"]))
				{
					$nerr = "Name Is Required";
				}
				else
				{
					$n = test_input($_POST["name"]);
					if (!preg_match("/^[a-zA-Z ]*$/",$n))
					{
						$nerr = "Only Letters and White Spaces Are Allowed";
					}
				}
				if (empty($_POST["userName"]))
				{
					$unerr = "Name Is Required";
				}
				else
				{
					$un = test_input($_POST["userName"]);
					if (!preg_match("/^[a-zA-Z ]*$/",$un))
					{
						$unerr = "Only Letters and White Spaces Are Allowed";
					}
				}
				if (empty($_POST["yourEmail"]))
				{
					$eerr = "Email Is Required";
				}
				else
				{
					$e = test_input($_POST["yourEmail"]);
					if (!filter_var($e, FILTER_VALIDATE_EMAIL))
					{
						$eerr = "Invalide Email Format";
					}
				}
				if (empty($_POST["password"]))
				{
					$perr = "Enter an Valid Password";
				}
				else
				{
					$p = test_input($_POST["password"]);
				}
				$m = test_input($_POST["month"]);
				$d = test_input($_POST["day"]);
				$y = test_input($_POST["year"]);
				$g = test_input($_POST["gender"]);
				$b = $d."/".$m."/".$y;
				
				if ($nerr == "" && $unerr == "" && $eerr == "" && $perr == "")
				{
					require 'config.php';
					
					$statement="insert into account(name, username, email, password, birthday, gender) values ('$n','$un','$e', '$p', '$b', '$g')";

					if(mysqli_query($conn,$statement))
					{
					    header('location:login.php');
					}
					else
					{
						mysqli_error($conn);
					}
					mysqli_close($conn);
				}
			}
			function test_input($data) 
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>
		<h2>
			Sign Up
		</h2>
		<p style = "font-size : 20px; ">
			<b>
				It's free and always will be.
			</b>
		</p>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
			<p>
				<input type = "text" name = "name" value = "<?php echo $n; ?>" placeholder = "Name" style =  "float : center; width : 168px;" autofocus>
				<span class = "error"> * <?php echo $nerr; ?> <span/>
				
				<input type = "text" name = "userName" value = "<?php echo $un; ?>" placeholder = "User Name" style =  "float : center; width : 168px;">
				<span class = "error"> * <?php echo $unerr; ?> <span/>
				<br/>
				<br/>
				<input type = "email" name = "yourEmail" value = "<?php echo $e; ?>" placeholder = "Your Email" size = "46">
				<span class = "error"> * <?php echo $eerr; ?> <span/>
				<br/>
				<br/>
				<input type = "password" name = "password" value = "<?php echo $p; ?>" placeholder = "Password" size = "46">
				<span class = "error"> * <?php echo $perr; ?> <span/>
				<h5>
					Birthday
				</h5>
				<select name = "month" style = "width : 80px;">
					<option value = "Jan"> 
						Jan 
					</option>
					<option value = "Feb"> 
						Feb 
					</option>
					<option value = "Mar"> 
						Mar 
					</option>
					<option value = "Apr"> 
						Apr 
					</option>
					<option value = "May"> 
						May 
					</option>
					<option value = "Jun"> 
						Jun 
					</option>
					<option value = "Jul"> 
						Jul 
					</option>
					<option value = "Aug"> 
						Aug 
					</option>
					<option value = "Sep"> 
						Sep 
					</option>
					<option value = "Oct"> 
						Oct 
					</option>
					<option value = "Nov"> 
						Nov 
					</option>
					<option value = "Dec"> 
						Dec 
					</option>
				</select>
				<select name = "day" style = "width : 80px;">
					<?php
						for($i = 1; $i <= 31; $i++)
						{
							echo "<option value = '$i'> $i </option>";
						}
					?>
				</select>
				<select name = "year" style = "width : 80px;">
					<?php
						for($i = 1900; $i <= 2018; $i++)
						{
							echo "<option value = '$i'> $i </option>";
						}
					?>
				</select>
				<br/>
				<br/>
				<h5>
					Gender
				</h5>
				<input type = "radio" name = "gender" value = "Male" style = "height : 15px" required="true"> Male
				<input type = "radio" name = "gender" value = "Female" style = "height : 15px"> Female
				<br/>
				<br/>
				<!--
					Enter a date before 1980-01-01:<br>
					<input type="date" name="bday" max="1979-12-31"><br><br>
					Enter a date after 2000-01-01:<br>
					<input type="date" name="bday" min="2000-01-02"><br><br>
					<br/>
					<br/>
					<input type="color" name="favcolor">
					<br/>
					<br/>
					Select a file: <input type="file" name="myFile">
					<br/>
					<br/>
					<input type="number" name="quantity" min="0" max="100" step="10" value="30">
					<br/>
					<br/>
					<input type="range" name="points" step="5" min="0" max="10">
					<br/>
					<br/>
					<input type="time" name="usr_time">
					<br/>
					<br/>
					<input type="week" name="year_week">
					<br/>
					<br/>
					<input list="browsers" name="browser">
					<datalist id="browsers">
					<option value="Internet Explorer">
					<option value="Firefox">
					<option value="Chrome">
					<option value="Opera">
					<option value="Safari">
					</datalist>
					<br/>
					<br/>
				-->
				<button type = "submit" style = "width : 150px;"> 
					Sign Up
				</button>
			</p>
		</form>
		
	</body>
</html>