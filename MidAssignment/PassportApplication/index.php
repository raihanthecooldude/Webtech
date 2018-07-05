<!DOCTYPE html>
<html>
<head>
	<title>Passport 1</title>

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
			width: 90%;
			height: 3px;
			color: #bfbfbf;
			background-color: #bfbfbf;
		}

		.Split
		{
			width: 45%;
			position: fixed;
			z-index: 1;
			overflow-x: hidden;
			border: 0;
		}

		.Left
		{
			left: 5%;
		}

		.Right
		{
			right: 5%;
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
			height: 25px;
			border-radius: 4px;



			font-size: 12px;
			font-family: Calibri;
		}

		.TextArea
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
			padding-top: 5px;
			padding-bottom: 5px;
			padding-right: 10px;
		}

		.Main
		{
			overflow: auto;
		}

	</style>
</head>
<body>

	<form name="stage1" method="post" action="stage2.php">
		<h3>PASSPORT APPLICATION - STAGE 1</h3>
		<p id="RedMark">	Before filling up the online application form read the <a href="#">guidelines</a> carefully.</p>
		<p id="Normal">Fields marked with <i><b><font color="red">(*)</font></b></i> are mandatory.</p>
		<hr class="x"><br><br>

		<div class="Main">

			<div class="Split Left">
				<table class="LeftTable" align="center">
					<tr class="SubDiv">
						<td colspan="2">Passport Application Information</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr>
						<td>Applying in:<font color="red">*</font></td>
						<td>
							<select>
  								<option value="BANGLADESH">BANGLADESH</option>
 								<option value="FRANCE">FRANCE</option>
  								<option value="ITALY">ITALY</option>
  								<option value="CANADA">CANADA</option>
  								<option value="SPAIN">SPAIN</option>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2">Application Type: <b>NEW APPLICATION</b></td>
					</tr>
					<tr>
						<td>Passport Type:<font color="red">*</font></td>
						<td>
							<select>
  								<option value="A">-SELECT-</option>
 								<option value="ORDINARY">ORDINARY</option>
  								<option value="DIPLOMATICY">DIPLOMATIC</option>
  								<option value="OFFICIAL">OFFICIAL</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Delivery Type:</td>
						<td>
							<input type="radio" name="Delivery" value="Regular">Regular<br>
							<input type="radio" name="Delivery" value="Express">Express
						</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr class="SubDiv">
						<td colspan="2">Personal Information</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr>
						<td>Name of<br>Applicant:<font color="red">*</font></td>
						<td><input type="text" class="TextArea" name="ApplicantName" value=""></td>
					</tr>
					<tr>
						<td>First Part (Given<br>Name):</td>
						<td><input type="text" class="TextArea" name="FirstName" value=""></td>
					</tr>
					<tr>
						<td>Second Part<br>(Surname)<font color="red">*</font></td>
						<td><input type="text" class="TextArea" name="LastName" value=""></td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr class="SubDiv">
						<td colspan="2">Guardian <input type="checkbox" name="adapted" value="adapted"> <font color="red"><i>"Tick"</i></font> only if Applicant is legally adapted</td>
					</tr>
					<tr>
						<td>Father's Name:<font color="red">*</font></td>
						<td><input type="text" class="TextArea" name="FatherName" value=""></td>
					</tr>
					<tr>
						<td>Father's<br>Nationality:<font color="red">*</font></td>
						<td>
							<select>
  								<option value="FBANGLADESHI">BANGLADESHI</option>
 								<option value="FFRENCH">FRENCH</option>
  								<option value="FITALIAN">ITALIAN</option>
  								<option value="FCANADIAN">CANADIAN</option>
  								<option value="FSPANISH">SPANISH</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Father's<br>Profession:<font color="red">*</font></td>
						<td>
							<select>
  								<option value="F">-SELECT-</option>
 								<option value="FCSENGINEER">CS ENGINEER</option>
  								<option value="FBEKAR">BEKAR</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Mother's Name:<font color="red">*</font></td>
						<td><input type="text" class="TextArea" name="MotherName" value=""></td>
					</tr>
					<tr>
						<td>Mother's<br>Nationality:<font color="red">*</font></td>
						<td>
							<select>
  								<option value="MBANGLADESHI">BANGLADESHI</option>
 								<option value="MFRENCH">FRENCH</option>
  								<option value="MITALIAN">ITALIAN</option>
  								<option value="MCANADIAN">CANADIAN</option>
  								<option value="MSPANISH">SPANISH</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Mother's<br>Profession:<font color="red">*</font></td>
						<td>
							<select>
  								<option value="M">-SELECT-</option>
 								<option value="MHOUSEWIFE">HOUSEWIFE</option>
 								<option value="MCSENGINEER">CS ENGINEER</option>
  								<option value="MBEKAR">BEKAR</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Spouse's Name:<font color="red">*</font></td>
						<td><input type="text" class="TextArea" name="SpouserName" value=""></td>
					</tr>
					<tr>
						<td>Spouse's<br>Nationality:<font color="red">*</font></td>
						<td>
							<select>
  								<option value="SBANGLADESHI">BANGLADESHI</option>
 								<option value="SFRENCH">FRENCH</option>
  								<option value="SITALIAN">ITALIAN</option>
  								<option value="SCANADIAN">CANADIAN</option>
  								<option value="SSPANISH">SPANISH</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Spouse's<br>Profession:<font color="red">*</font></td>
						<td>
							<select>
  								<option value="S">-SELECT-</option>
 								<option value="CSENGINEER">CS ENGINEER</option>
  								<option value="SBEKAR">BEKAR</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Marital Status:<font color="red">*</font></td>
						<td>
							<select>
  								<option value="S">-SELECT-</option>
  								<option value="single">SINGLE</option>
  								<option value="married">MARRIED</option>
  								<option value="divorced">DIVORCED</option>
  								<option value="widowed">WIDOWED</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Applicant's<br>Profession:<font color="red">*</font></td>
						<td>
							<select>
  								<option value="A">-SELECT-</option>
  								<option value="BEKAR">BEKAR</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Country of<br>Birth:<font color="red">*</font></td>
						<td>
							<select>
  								<option value="BANGLADESH">BANGLADESH</option>
 								<option value="FRANCE">FRANCE</option>
  								<option value="ITALY">ITALY</option>
  								<option value="CANADA">CANADA</option>
  								<option value="SPAIN">SPAIN</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Birth District:<font color="red">*</font></td>
						<td>
							<select>
  								<option value="bd">-SELECT-</option>
							</select>
						</td>
					</tr>

				</table>
			</div>


			<div class="Split Right">
				<table class="RightTable" align="center">
				
				</table>
			</div>

		</div>
	</form>

</body>
</html>