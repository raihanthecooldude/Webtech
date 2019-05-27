<?php
	session_start();
	$store=$_SESSION[oaid];
	$file =fopen("fello/$store.txt", "w") or die("Unable to open file!");

	$txt1="Application ID: ".$_SESSION['oaid'].chr(13).chr(10);
	fwrite($file, $txt1);
	$txt1=chr(13).chr(10);
	fwrite($file, $txt1);
	$txt1="Full Name: ".$_SESSION['ApplicantName'].chr(13).chr(10);
	fwrite($file, $txt1);
	$txt2="First Name: ".$_SESSION['FirstName'].chr(13).chr(10);
	fwrite($file, $txt2);
	$txt3="Last Name: ".$_SESSION['LastName'].chr(13).chr(10);
	fwrite($file, $txt3);
	$txt4="Gender: ".$_SESSION['Gender'].chr(13).chr(10);
	fwrite($file, $txt4);
	$txt5="Natinality: ".$_SESSION['AN'].chr(13).chr(10);
	fwrite($file, $txt5);
	$txt6="Date of Birth: ".$_SESSION['dateofbirth'].chr(13).chr(10);
	fwrite($file, $txt6);
	$txt7="Country: ".$_SESSION['BDCountry'].chr(13).chr(10);
	fwrite($file, $txt7);
	$txt8="Father Name: ".$_SESSION['FatherName'].chr(13).chr(10);
	fwrite($file, $txt8);
	$txt9="Mother Name: ".$_SESSION['MotherName'].chr(13).chr(10);
	fwrite($file, $txt9);
	$txt11="Spouse Name: ".$_SESSION['SpouserName'].chr(13).chr(10);
	fwrite($file, $txt11);
	$txt12="National ID No: ".$_SESSION['NID'].chr(13).chr(10);
	fwrite($file, $txt12);
	$txt13="Birth ID No: ".$_SESSION['BID'].chr(13).chr(10);
	fwrite($file, $txt13);
	$txt14="Applying In: ".$_SESSION['Apply'].chr(13).chr(10);
	fwrite($file, $txt14);
	$txt15="Passpost Type: ".$_SESSION['PassType'].chr(13).chr(10);
	fwrite($file, $txt15);
	$txt16="Present Address: ".$_SESSION['presentadd'].chr(13).chr(10);
	fwrite($file, $txt16);
	$txt17="permamanet Address: ".$_SESSION['permamanetadd'].chr(13).chr(10);
	fwrite($file, $txt17);
	$txt18="Email: ".$_SESSION['email'].chr(13).chr(10);
	fwrite($file, $txt18);
	fclose($file);

	header("location:final.php");
?>