<!DOCTYPE html>
<html>
<head>
	<title>Passport Review</title>
</head>

<style type="text/css">
		
		body
		{
			font-family: Calibri;
			/*text-align: center;*/
		}

		#Normal
		{
			/*font-size: 12px;
			font-family: Calibri;
			font-style: bold;*/
			font: bold 12px Calibri;

		}

		#RedMark
		{
			color: red;
			font: italic bold 12px Calibri;
		}

		hr.x
		{
			border: 0px;
			width: 85%;
			height: 3px;
			color: #bfbfbf;
			background-color: #bfbfbf;
		}

		*
		{
			box-sizing: border-box;
		}

		.Split
		{
			width: 45%;
			/*position: relative;*/
			z-index: 1;
			border: 1px solid red;
			border: 0;
		}

		.Main
		{
			/*height: 135%;*/
			width: 84%;
			/*border-top: 1px solid #bfbfbf;
			border-bottom: 1px solid #bfbfbf;
			border-left: 1px solid #bfbfbf;
			border-right: 1px solid #bfbfbf;*/
			/*position: absolute;*/
			left: 8%;
			content: "";
			display: table;
			clear: both;
		}

		fieldset
		{
			/*width: 86%;*/
			/*left: 10%;*/

		}

		.Left
		{
			float: left;
			overflow: hidden;
			left: 5%;
			/*border: 1px solid red;*/
		}

		.Right
		{
			float: right;
			overflow: hidden;
			right: 5%;
			/*border: 1px solid red;*/
		}

		.LeftTable, .RightTable
		{
			font-size: 12px;
			font-family: Calibri;
		}

		.SubDiv
		{
			font: bold 14px Calibri;
		}

		select
		{
			width: 270px;
			height: 30px;
			border-radius: 4px;



			font-size: 12px;
			font-family: Calibri;
		}

		.TextArea, .Date
		{
			border: 1px solid #cccccc;
			width: 270px;
			height: 25px;
			border-radius: 4px;



			font-size: 12px;
			font-family: Calibri;
		}

		.LeftTable td, .RightTable td
		{
			padding-top: 8px;
			padding-bottom: 8px;
			padding-right: 10px;
		}

		.Top
		{
			position: relative;
			width: 80%;
			left:8%;
			border: 0;
		}

		.Save
		{
			float: right;
			padding-right: 12px;
			padding-left: 12px;
			font-family: Calibri;
		}

		input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button, input[type=date]::-webkit-inner-spin-button, input[type=date]::-webkit-outer-spin-button
		{ 
  			-webkit-appearance: none; 
  			margin: 0; 
		}

	</style>
<body>
	<form name="eview" method="post" action="final.php">
		<div class="Top">
			<h3> PASSPORT APPLICATION - Review Enrolment Summary</h3>
<?php
	session_start();

	$_SESSION['AmountBDT']=$_POST['AmountBDT'];
	$_SESSION['paydate']=$_POST['paydate'];
	$_SESSION['Rno']=$_POST['Rno'];
	$_SESSION['Bank']=$_POST['Bank'];
	$_SESSION['Branch']=$_POST['Branch'];

	echo "<b>Online Application ID: &nbsp&nbsp&nbsp ".$_SESSION['oaid']."</b><br>";
?>
		
		<p id="Normal"></p>
		<i><b><font color="red">Your application have been saved</font></b></i><br>
		</div>
		<br>
		<hr class="x">
		<fieldset>
			<div class="Main">
				<div class="Split Left">
					<table class="LeftTable" align="center">
						<tr class="SubDiv">
							<td colspan="2">Personal Information Summary</td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr>
							<td>Name of Applicant: </td>
							<td><b><?php echo  $_SESSION['ApplicantName']; ?></b></td>
						</tr>
						<tr>
							<td>Second Part (Surname): </td>
							<td><b><?php echo  $_SESSION['LastName']; ?></b></td>
						</tr>
						<tr>
							<td>First Part (Given Name): </td>
							<td><b><?php echo  $_SESSION['FirstName']; ?></b></td>
						</tr>
						<tr>
							<td>Gender: </td>
							<td><b><?php echo  $_SESSION['Gender']; ?></b></td>
						</tr>
						<tr>
							<td>Nationality: </td>
							<td><b><?php echo  $_SESSION['AN']; ?></b></td>
						</tr>
						<tr>
							<td>Date of Birth: </td>
							<td><b><?php echo  $_SESSION['dateofbirth']; ?></b></td>
						</tr>
						<tr>
							<td>Place of Birth: </td>
							<td><b><?php echo  $_SESSION['BDCountry']; ?></b></td>
						</tr>
						<tr>
							<td>Father's Name: </td>
							<td><b><?php echo  $_SESSION['FatherName']; ?></b></td>
						</tr>
						<tr>
							<td>Mother's Name: </td>
							<td><b><?php echo  $_SESSION['MotherName']; ?></b></td>
						</tr>
						<tr>
							<td>Spouse's Name: </td>
							<td><b><?php echo  $_SESSION['SpouserName']; ?></b></td>
						</tr>
						<tr>
							<td>National ID No: </td>
							<td><b><?php echo  $_SESSION['NID']; ?></b></td>
						</tr>
						<tr>
							<td>Birth Id No: </td>
							<td><b><?php echo  $_SESSION['BID']; ?></b></td>
						</tr>
					</table>
				</div>

				<div class="Split Right">
					<table class="RightTable" align="centers">
						<tr class="SubDiv">
							<td colspan="2">Passport Information Summary</td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr>
							<td>Applying In: </td>
							<td><b><?php echo  $_SESSION['Apply']; ?></b></td>
						</tr>
						<tr>
							<td>Passport Type: </td>
							<td><b><?php echo  $_SESSION['PassType']; ?></b></td>
						</tr>
						<tr>
							<td>Application Type: </td>
							<td><b>NEW</b></td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr class="SubDiv">
							<td colspan="2">Contact Information Summary</td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr>
							<td>Mobile No: </td>
							<td><b><?php echo  $_SESSION['mno']; ?></b></td>
						</tr>
						<tr>
							<td>Present Address: </td>
							<td><b><?php echo  $_SESSION['presentadd']; ?></b></td>
						</tr>
						<tr>
							<td>Permanent Address: </td>
							<td><b><?php echo  $_SESSION['permamanetadd']; ?></b></td>
						</tr>
						<tr>
							<td>Email: </td>
							<td><b><?php echo  $_SESSION['email']; ?></b></td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr class="SubDiv">
							<td colspan="2">Payment Information Summary</td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr>
							<td>Payment Amount: </td>
							<td><b><?php echo  "(BDT) ".$_SESSION['AmountBDT']; ?></b></td>
						</tr>
						<tr>
							<td>Payment Date: </td>
							<td><b><?php echo  $_SESSION['paydate']; ?></b></td>
						</tr>
						<tr>
							<td>Receipt No: </td>
							<td><b><?php echo  $_SESSION['Rno']; ?></b></td>
						</tr>
						<tr>
							<td>Bank Name: </td>
							<td><b><?php echo  $_SESSION['Bank']; ?></b></td>
						</tr>
						<tr>
							<td>Branch Name: </td>
							<td><b><?php echo  $_SESSION['Branch']; ?></b></td>
						</tr>
						<tr>
							<td> </td>
						</tr>
					</table>
				</div>
			</div>
		</fieldset>
	</form>

	<script type="text/javascript">
		n =  new Date();
		y = n.getFullYear();
		m = n.getMonth() + 1;
		d = n.getDate();
		document.getElementById("Normal").innerHTML = "Enrolment Date: " + m + "/" + d + "/" + y;
	</script>

<?php
	session_destroy();
?>
</body>
</html>