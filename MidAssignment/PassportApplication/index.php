<!DOCTYPE html>
<html>
<head>
	<title>Passport Page 1</title>

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
			padding: 10px 24px;
			font-family: Calibri;
		}

		input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button, input[type=date]::-webkit-inner-spin-button, input[type=date]::-webkit-outer-spin-button
		{ 
  			-webkit-appearance: none; 
  			margin: 0; 
		}

	</style>
</head>
<body>
	<form name="stage1" method="post" action="stage2.php">
		<div class="Top">
			<h3> PASSPORT APPLICATION - STAGE 1</h3>
			<p id="RedMark"> Before filling up the online application form read the <a href="#">guidelines</a> carefully.</p>
			<p id="Normal"> Fields marked with <i><b><font color="red">(*)</font></b></i> are mandatory.</p>
		</div>
		<br>
		<hr class="x">
		<fieldset>
		<div class="Main">
			<br><br>
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
							<select name="Apply" required>
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
							<select name="PassType" required>
  								<option value="">-SELECT-</option>
 								<option value="ORDINARY">ORDINARY</option>
  								<option value="DIPLOMATICY">DIPLOMATIC</option>
  								<option value="OFFICIAL">OFFICIAL</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Delivery Type:</td>
						<td>
							<input type="radio" name="Delivery" value="Regular" required>Regular<br>
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
						<td><input type="text" class="TextArea" name="ApplicantName" value="" pattern="^([a-zA-Z]+)((' |[ ]|[-])([a-zA-Z]*))*$" oninvalid="this.setCustomValidity('Please Enter your Name using only Characters')" oninput="setCustomValidity('')" required></td>
					</tr>
					<tr>
						<td>First Part<br>(Given Name):</td>
						<td><input type="text" class="TextArea" name="FirstName" value="" pattern="^([a-zA-Z]+)((' |[ ]|[-])([a-zA-Z]*))*$" oninvalid="this.setCustomValidity('Please Enter your Name using only Characters')" oninput="setCustomValidity('')" value=""></td>
					</tr>
					<tr>
						<td>Second Part<br>(Surname)<font color="red">*</font></td>
						<td><input type="text" class="TextArea" name="LastName" pattern="^([a-zA-Z]+)((' |[ ]|[-])([a-zA-Z]*))*$" oninvalid="this.setCustomValidity('Please Enter your Name using only Characters')" oninput="setCustomValidity('')" value="" required></td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr class="SubDiv">
						<td colspan="2">Guardian <input type="checkbox" id="adapted" name="adapted" value="adapted"> <font color="red"><i>"Tick"</i></font> only if Applicant is legally adapted</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr>
						<td>Father's Name:<font color="red">*</font></td>
						<td><input type="text" class="TextArea" name="FatherName" pattern="^([a-zA-Z]+)((' |[ ]|[-])([a-zA-Z]*))*$" oninvalid="this.setCustomValidity('Please Enter your Name using only Characters')" oninput="setCustomValidity('')" value="" required></td>
					</tr>
					<tr>
						<td>Father's<br>Nationality:<font color="red">*</font></td>
						<td>
							<select name="FN" required>
  								<option value="BANGLADESHI">BANGLADESHI</option>
 								<option value="FRENCH">FRENCH</option>
  								<option value="ITALIAN">ITALIAN</option>
  								<option value="CANADIAN">CANADIAN</option>
  								<option value="SPANISH">SPANISH</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Father's<br>Profession:<font color="red">*</font></td>
						<td>
							<select name="FPro" required>
  								<option value="">-SELECT-</option>
 								<option value="CSENGINEER">CS ENGINEER</option>
  								<option value="BEKAR">BEKAR</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Mother's Name:<font color="red">*</font></td>
						<td><input type="text" class="TextArea" pattern="^([a-zA-Z]+)((' |[ ]|[-])([a-zA-Z]*))*$" oninvalid="this.setCustomValidity('Please Enter your Name using only Characters')" oninput="setCustomValidity('')" name="MotherName" id="mothername" value="" required></td>
					</tr>
					<tr>
						<td>Mother's<br>Nationality:<font color="red">*</font></td>
						<td>
							<select name="MN" required id="mothernationality">
  								<option value="BANGLADESHI">BANGLADESHI</option>
 								<option value="FRENCH">FRENCH</option>
  								<option value="ITALIAN">ITALIAN</option>
  								<option value="CANADIAN">CANADIAN</option>
  								<option value="SPANISH">SPANISH</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Mother's<br>Profession:<font color="red">*</font></td>
						<td>
							<select name="MPro" required id="motherprofession">
  								<option value="">-SELECT-</option>
 								<option value="HOUSEWIFE">HOUSEWIFE</option>
 								<option value="CSENGINEER">CS ENGINEER</option>
  								<option value="BEKAR">BEKAR</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Spouse's Name:</td>
						<td><input type="text" class="TextArea" name="SpouserName" pattern="^([a-zA-Z]+)((' |[ ]|[-])([a-zA-Z]*))*$" oninvalid="this.setCustomValidity('Please Enter your Name using only Characters')" oninput="setCustomValidity('')" value=""></td>
					</tr>
					<tr>
						<td>Spouse's<br>Nationality:</td>
						<td>
							<select name="SN">
  								<option value="BANGLADESHI">BANGLADESHI</option>
 								<option value="FRENCH">FRENCH</option>
  								<option value="ITALIAN">ITALIAN</option>
  								<option value="CANADIAN">CANADIAN</option>
  								<option value="SPANISH">SPANISH</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Spouse's<br>Profession:</td>
						<td>
							<select name="SPro">
  								<option value="">-SELECT-</option>
 								<option value="CSENGINEER">CS ENGINEER</option>
  								<option value="BEKAR">BEKAR</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Marital Status:<font color="red">*</font></td>
						<td>
							<select name="MS" required>
  								<option value="">-SELECT-</option>
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
							<select name="APro" required>
  								<option value="">-SELECT-</option>
  								<option value="BEKAR">BEKAR</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Country of<br>Birth:<font color="red">*</font></td>
						<td>
							<select name="Country" required>
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
							<select name="BDis" required>
  								<option value="">-SELECT-</option>
  								<option value="DHAKA">DHAKA</option>
  								<option value="NEWFOUNDLAND">NEWFOUNDLAND</option>
  								<option value="PARIS">PARIS</option>
  								<option value="MADRID">MADRID</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Date of Birth:<font color="red">*</font></td>
						<td><input type = "date" class="Date" name = "dateofbirth" min="1918-12-31"  id = "dateofbirthid" required>
					</tr>
				</table>
			</div>


			<div class="Split Right">
				<table class="RightTable" align="center">
					<tr>
						<td>Gender:<font color="red">*</font></td>
						<td>
							<input type="radio" name="Gender" value="Male"  required>Male<br>
							<input type="radio" name="Gender" value="Female">Female<br>
							<input type="radio" name="Gender" value="Others">Others
						</td>
					</tr>
					<tr>
						<td>Birth ID No:<font color="red">*</font></td>
						<td><input type="text" class="TextArea" name="BID" value="" pattern="^\d\d\d\d\d$" oninvalid="this.setCustomValidity('Please enter authentic Birth ID No.')" oninput="setCustomValidity('')" required></td>
					</tr>
					<tr>
						<td>National ID No:</td>
						<td><input type="text" class="TextArea" name="NID" value="" pattern="^\d\d\d\d\d$" oninvalid="this.setCustomValidity('Please enter authentic National ID No.')" oninput="setCustomValidity('')"></td>
					</tr>
					<tr>
						<td>Tax ID No:</td>
						<td><input type="text" class="TextArea" name="TID" value="" pattern="^\d\d\d\d\d$" oninvalid="this.setCustomValidity('Please enter authentic Tax ID No.')" oninput="setCustomValidity('')"></td>
					</tr>
					<tr>
						<td>Height:<font color="red">*</font></td>
						<td><input type="number" style="border: 1px solid #cccccc; width: 50px; height: 25px; border-radius: 4px;" name="Hcm" value="" min="1" required> &nbsp&nbsp cm &nbsp&nbsp <input type="number" style="border: 1px solid #cccccc; width: 50px; height: 25px; border-radius: 4px;" name="Hinch" value="" min="1" required> &nbsp&nbsp inch</td>
					</tr>
					<tr>
						<td>Religion:<font color="red" required>*</font></td>
						<td>
							<select name="AReligion">
  								<option value="">-SELECT-</option>
  								<option value="ISLAM">ISLAM</option>
  								<option value="HINDUISM">HINDUISM</option>
  								<option value="CHRISTIANITY">CHRISTIANITY</option>
  								<option value="BUDDHISM">BUDDHISM</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Email:<font color="red">*</font></td>
						<td><input type="email" class="TextArea" name="Email" value="" required><br>Example: xyz@abc.com</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr class="SubDiv">
						<td colspan="2">Citizenship Information</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr>
						<td>Nationality:<font color="red">*</font></td>
						<td>
							<select disabled="true" name="AN" required>
  								<option value="abd" selected>BANGLADESHI</option>
  							</select>
  							<input type="hidden" name="AN" value="abd">
						</td>
					</tr>
					<tr>
						<td>Citizenship Status:<font color="red">*</font></td>
						<td>
							<select name="CStatus" required>
  								<option value="BIRTH">BIRTH</option>
  								<option value="PARENTAGE">PARENTAGE</option>
  								<option value="MIGRATION">MIGRATION</option>
  								<option value="NATURALIZATION">NATURALIZATION</option>
  								<option value="OTHERS">OTHERS</option>
  							</select>
						</td>
					</tr>
					<tr>
						<td>Dual Citizenship:<font color="red">*</font></td>
						<td>
							<input type="radio" name="dc" value="yes"  required>Yes<br>
							<input type="radio" name="dc" value="no">No
						</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr class="SubDiv">
						<td colspan="2">Present Address</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr>
						<td>Village/House:</td>
						<td><input type="text" class="TextArea" name="PreHouse" id="prehouse" value=""></td>
					</tr>
					<tr>
						<td>Road/Block/Sector:</td>
						<td><input type="text" class="TextArea" name="PreRoad" id="preroad" value=""></td>
					</tr>
					<tr>
						<td>District:<font color="red">*</font></td>
						<td>
							<select name="PreDis" id="predis" required>
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
							<select name="PrePS" id="prepolice" required>
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
							<select name="PrePO" id="prepost" required>
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
						<td> </td>
					</tr>
					<tr class="SubDiv">
						<td colspan="2">Permanent Address</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr>
						<td colspan="2"><input type="checkbox" name="Per" id="preper" value="SameAsPre"> Same as above</td>
					</tr>
					<tr>
						<td>Village/House:</td>
						<td><input type="text" class="TextArea" name="PerHouse" id="perhouse" value=""></td>
					</tr>
					<tr>
						<td>Road/Block/Sector:</td>
						<td><input type="text" class="TextArea" name="PerRoad" id="perroad" value=""></td>
					</tr>
					<tr>
						<td>District:<font color="red">*</font></td>
						<td>
							<select name="PerDis" id="perdis" required>
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
							<select name="PerPS" id="perpolice" required>
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
							<select name="PerPO" id="perpost" required>
								<option value="">-SELECT-</option>
  								<option value="DHAKA">DHAKA</option>
  								<option value="CHITTAGONG">CHITTAGONG</option>
  								<option value="RAJSHAHI">RAJSHAHI</option>
  								<option value="SYLHET">SYLHET</option>
  								<option value="KHULNA">KHULNA</option>
  							</select>
						</td>
					</tr>
				</table>
				<br><br>
				<button class="Save">SAVE & NEXT</button>
			</div>
		</div>
		</fieldset>
	</form>


	<script>

		var adapted = document.getElementById("adapted");
		adapted.addEventListener("click", function ()
		{
     		if (adapted.checked)
     		{
          		mothername.readOnly = true;
          		mothernationality.disabled=true;
          		motherprofession.disabled=true;
    	 	}
    	 	else
    	 	{
        	  	mothername.readOnly = false;
          		mothernationality.disabled=false;
        	  	motherprofession.disabled=false;
     		}
		})

		var preper = document.getElementById("preper");
		var house = document.getElementById("prehouse");
		var road = document.getElementById("preroad");
		var district = document.getElementById("predis");
		var police = document.getElementById("prepolice");
		var post = document.getElementById("prepost");
		preper.addEventListener("click", function()
		{
     		if (preper.checked)
     		{
          		document.getElementById("perhouse").value = house.value;
          		document.getElementById("perroad").value = road.value;
          		document.getElementById("perdis").value = district.value;
          		document.getElementById("perpolice").value = police.value;
          		document.getElementById("perpost").value = post.value;
          		perhouse.readOnly=true;
          		perroad.readOnly=true;
          		perdis.disabled=true;
          		perpolice.disabled=true;
          		perpost.disabled=true;
    	 	}
    	 	else
    	 	{
    	 		document.getElementById("perhouse").value = "";
          		document.getElementById("perroad").value = "";
          		document.getElementById("perdis").value = "";
          		document.getElementById("perpolice").value = "";
          		document.getElementById("perpost").value = "";
    	 		perhouse.readOnly=false;
          		perroad.readOnly=false;
          		perdis.disabled=false;
          		perpolice.disabled=false;
          		perpost.disabled=false;
     		}
		})

		window.onbeforeunload = function()
		{
   			return " Changes you made may not be saved. ";
		}
	</script>
</body>
</html>