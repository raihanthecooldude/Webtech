<!DOCTYPE html>
<html>
<head>
	<title>Passport Page 2</title>

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
			width: 50%;
			left:8%;
			border: 0;
		}

		.Save
		{
			float: right;
			padding-right: 12px;
			padding-left: 12px;
			font-family: Calibri;
			margin-right: 10px;
		}

		input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button, input[type=date]::-webkit-inner-spin-button, input[type=date]::-webkit-outer-spin-button
		{ 
  			-webkit-appearance: none; 
  			margin: 0; 
		}

	</style>
</head>
<body>
	<form name="stage2" method="post" action="stage3.php">
<?php
	session_start();

	$_SESSION['ApplicantName']=$_POST['ApplicantName'];
	$_SESSION['FirstName']=$_POST['FirstName'];
	$_SESSION['LastName']=$_POST['LastName'];
	$_SESSION['Gender']=$_POST['Gender'];
	$_SESSION['AN']=$_POST['AN'];
	$_SESSION['dateofbirth']=$_POST['dateofbirth'];
	$_SESSION['BDCountry']=$_POST['BDis'].", ".$_POST['Country'];
	$_SESSION['FatherName']=$_POST['FatherName'];
	$_SESSION['MotherName']=$_POST['MotherName'];
	$_SESSION['SpouserName']=$_POST['SpouserName'];
	$_SESSION['NID']=$_POST['NID'];
	$_SESSION['BID']=$_POST['BID'];
	$_SESSION['Apply']=$_POST['Apply'];
	$_SESSION['PassType']=$_POST['PassType'];
	$_SESSION['presentadd']=$_POST['PreHouse']." ".$_POST['PreRoad']." ".$_POST['PreDis']." ".$_POST['PrePS']." ".$_POST['PrePO'];
	$_SESSION['permamanetadd']=$_POST['PerHouse']." ".$_POST['PerRoad']." ".$_POST['PerDis']." ".$_POST['PerPS']." ".$_POST['PerPO'];
	$_SESSION['email']=$_POST['Email'];
?>
		<div class="Top">
			<h3> PASSPORT APPLICATION - STAGE 2</h3>
<?php
	$_SESSION['oaid']=rand(10, 100000000);
	echo "<b>Online Application ID: &nbsp&nbsp&nbsp ".$_SESSION['oaid']."</b><br>";
?>
			<p id="Normal"> Fields marked with <i><b><font color="red">(*)</font></b></i> are mandatory.</p>
		</div>
		<br>
		<hr class="x">
		<fieldset>
			<div class="Main">
				<div class="Split Left">
					<table class="LeftTable" align="center">
						<tr class="SubDiv">
							<td colspan="2">Applicant Contact Information</td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr>
							<td>Office No:</td>
							<td><input type="text" class="TextArea" name="ono" value="" pattern="^\d\d\d\d\d\d\d$" oninvalid="this.setCustomValidity('Please enter 7 digit Telephone No.')" oninput="setCustomValidity('')"><br>Please enter 7 digit Telephone No.</td>
						</tr>
						<tr>
							<td>Residence No:</td>
							<td><input type="text" class="TextArea" name="rno" value="" pattern="^\d\d\d\d\d\d\d$" oninvalid="this.setCustomValidity('Please enter 7 digit Telephone No.')" oninput="setCustomValidity('')"><br>Please enter 7 digit Telephone No.</td>
						</tr>
						<tr>
							<td>Mobile No:</td>
							<td><input type="text" class="TextArea" name="mno" value="" pattern="^\d\d\d\d\d\d\d\d\d\d\d$" oninvalid="this.setCustomValidity('Please enter 11 digit Mobile No.')" oninput="setCustomValidity('')"><br>Please enter 11 digit Mobile No.</td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr class="SubDiv">
							<td colspan="2">Emergency Contact Person's Details</td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr>
							<td>Name:<font color="red">*</font></td>
							<td><input type="text" class="TextArea" name="EmerName" pattern="^([a-zA-Z]+)((' |[ ]|[-])([a-zA-Z]*))*$" oninvalid="this.setCustomValidity('Please Enter your Name using only Characters')" oninput="setCustomValidity('')" value="" required></td>
						</tr>
						<tr>
							<td>Country:<font color="red">*</font></td>
							<td>
								<select disabled="true" name="EmerCountry" required>
  									<option value="ebd" selected>BANGLADESH</option>
  								</select>
  								<input type="hidden" name="EmerCountry" value="ebd">
							</td>
						</tr>
						<tr>
							<td colspan="2"><input type="checkbox" name="EmerPer" value="SameAsPre"><i><b> Same as Permanent Address</b></i></td>
						</tr>
						<tr>
							<td colspan="2"><input type="checkbox" name="EmerPre" value="SameAsPre"><i><b> Same as Present Address</b></i></td>
						</tr>
						<tr>
							<td>Village/House:</td>
							<td><input type="text" class="TextArea" name="PerHouse" value=""></td>
						</tr>
						<tr>
							<td>Road/Block/Sector:</td>
							<td><input type="text" class="TextArea" name="PerRoad" value=""></td>
						</tr>
						<tr>
							<td>District:<font color="red">*</font></td>
							<td>
								<select name="EmerDis" required>
									<option value="">-SELECT-</option>
  									<option value="DHAKA">DHAKA</option>
  									<option value="CHITTAGONG">CHITTAGONG</option>
  									<option value="RAJSHAHI">RAJSHAHI</option>
 	 								<option value="SYLHET">SYLHET</option>
   									<option value="KHULNA">KHULNA</option>
  								</select>
							</td>
						</tr>
						<tr>
							<td>Police Station:<font color="red">*</font></td>
							<td>
								<select name="EmerPS" required>
									<option value="">-SELECT-</option>
  									<option value="DHAKA">DHAKA</option>
	  								<option value="CHITTAGONG">CHITTAGONG</option>
  									<option value="RAJSHAHI">RAJSHAHI</option>
 	 								<option value="SYLHET">SYLHET</option>
  									<option value="KHULNA">KHULNA</option>
  								</select>
							</td>
						</tr>
						<tr>
							<td>Post Office:<font color="red">*</font></td>
							<td>
								<select name="EmerPO" required>
									<option value="">-SELECT-</option>
  									<option value="DHAKA">DHAKA</option>
  									<option value="CHITTAGONG">CHITTAGONG</option>
  									<option value="RAJSHAHI">RAJSHAHI</option>
	  								<option value="SYLHET">SYLHET</option>
  									<option value="KHULNA">KHULNA</option>
  								</select>
							</td>
						</tr>
						<tr>
							<td>Contact No:<font color="red">*</font></td>
							<td><input type="text" class="TextArea" name="EmerNo" value="" pattern="^\d\d\d\d\d\d\d\d\d\d\d$" oninvalid="this.setCustomValidity('Please enter 11 digit Contact No.')" oninput="setCustomValidity('')" required><br>Please enter 11 digit Contact No.</td>
						</tr>
						<tr>
							<td>Email:<font color="red">*</font></td>
							<td><input type="email" class="TextArea" name="EmerEmail" value="" required><br>Example: xyz@abc.com</td>
						</tr>
						<tr>
							<td>Relationship:<font color="red">*</font></td>
							<td>
								<select name="EmerRelation" required>
									<option value="">-SELECT-</option>
  									<option value="FAMILY">FAMILY</option>
  									<option value="RELATIVE">RELATIVE</option>
  									<option value="FRIEND">FRIEND</option>
  									<option value="SHUSHOMOYERBONDHU">SHUSHOMOYER BONDHU</option>
  									<option value="AJAIRA">AJAIRA</option>
  								</select>
							</td>
						</tr>
					</table>
				</div>

				<div class="Split Right">
					<table class="RightTable" align="center">
						<tr class="SubDiv">
							<td colspan="2">Old Passport Information (If Applicable)</td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr>
							<td>Passport No:</td>
							<td><input type="text" class="TextArea" name="oldp" pattern="^\d\d\d\d\d$" oninvalid="this.setCustomValidity('Please enter authentic Passport No.')" oninput="setCustomValidity('')" value=""><!--<br>Please Enter your 5 Digit Passport No.--></td>
						</tr>
						<tr>
							<td>Place of Issue:</td>
							<td><input type="text" class="TextArea" name="oldplace" pattern="^([a-zA-Z]+)((' |[ ]|[-])([a-zA-Z]*))*$" oninvalid="this.setCustomValidity('Please enter your original place of issue')" oninput="setCustomValidity('')" value=""></td>
						</tr>
						<tr>
							<td>Date of Issue:</td>
							<td><input type = "date" class="Date" name = "olddate" min="1918-12-31">
						</tr>
						<tr>
							<td>Re-issue Reason:</td>
							<td>
								<select name="Old">
									<option value="">-SELECT-</option>
  									<option value="LOST">LOST</option>
  									<option value="STOLEN">STOLEN</option>
  									<option value="EMNIMONCHAILOTAI">EMNI MON CHAILO TAI</option>
  								</select>
							</td>
						</tr>
					</table>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					</button><button class="Save">SAVE & NEXT</button> <button class="Save"><a href="index.php">BACK</a></button>
				</div>
			</div>
		</fieldset>
	</form>

	<script>
		// window.onbeforeunload = function()
		// {
  //  			return " Changes you made may not be saved. ";
		// }
	</script>
</body>
</html>