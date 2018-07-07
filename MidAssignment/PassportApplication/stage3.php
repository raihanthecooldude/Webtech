<!DOCTYPE html>
<html>
<head>
	<title>Passport Page 3</title>

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
	<form name="stage3" method="post" action="review.php">
		<div class="Top">
			<h3> PASSPORT APPLICATION - STAGE 2</h3>
<?php
	$oaid=rand(10, 100000000);
	echo "<b>Online Application ID: &nbsp&nbsp&nbsp ".$oaid."</b><br>";
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
							<td colspan="2">Payment Information</td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr>
							<td>Payment Type:</td>
							<td>
								<input type="radio" name="Payment" value="Regular" required>Online<br>
								<input type="radio" name="Payment" value="Express">Non-Online
							</td>
						</tr>
						<tr>
							<td colspan="2"><input type="checkbox" name="SkipPayment" value="SkipPayment"><i><b> Skip Payment</b></i></td>
						</tr>
						<tr>
							<td>Amount:<font color="red">*</font></td>
							<td>
								<select disabled="true" name="Amount" style="border: 1px solid #cccccc; width: 60px; height: 25px; border-radius: 4px;" required>
  									<option value="bdt" selected>BDT</option>
  								</select>
  								&nbsp&nbsp&nbsp&nbsp
  								 <input type="text" style="border: 1px solid #cccccc; width: 80px; height: 25px; border-radius: 4px;" name="AmountBDT" value="" pattern="^(\d)$|^(\d\d)$|^(\d\d\d)$|^(\d\d\d\d)$|^(\d\d\d\d\d)$|^(\d\d\d\d\d\d)$" oninvalid="this.setCustomValidity('Please enter your required Amount')" oninput="setCustomValidity('')" required>
  								<input type="hidden" name="Amount" value="bdt">
							</td>
						</tr>
						<tr>
							<td>Date of Payment:<font color="red">*</font></td>
							<td><input type = "date" class="Date" name = "paydate" min="1918-12-31" required>
						</tr>
						<tr>
							<td>Receipt No:<font color="red">*</font></td>
							<td><input type = "text" class="Date" name = "Rno" pattern="^\d\d\d\d\d$" oninvalid="this.setCustomValidity('Please enter your authentic Receipt No')" oninput="setCustomValidity('')" required><!--<br>Please Enter your 5 Digit Receipt No.--></td>
						</tr>
						<tr>
							<td>Name of Bank:<font color="red">*</font></td>
							<td>
								<select name="Bank" required>
									<option value="">-SELECT-</option>
  									<option value="BANKONE">BANK ONE</option>
  									<option value="BANKTWO">BANK TWO</option>
  									<option value="BANKTHREE">BANK THREE</option>
  								</select>
							</td>
						</tr>
						<tr>
							<td>Name of Branch:<font color="red">*</font></td>
							<td>
								<select name="Branch" required>
									<option value="">-SELECT-</option>
  									<option value="BRANCHONE">BRANCH ONE</option>
  									<option value="BRANCHTWO">BRANCH TWO</option>
  									<option value="BRANCHTHREE">BRANCH THREE</option>
  								</select>
							</td>
						</tr>
					</table>
				</div>

				<div class="Split Right">
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<button class="Save">SAVE & NEXT</button>
				</div>
			</div>
		</fieldset>
	</form>
</body>
</html>