<!DOCTYPE html>
<html>
<head>
	<title>Result</title>

	<style>
		body
		{
			text-align: center;
		}

		#CharTable, #WordTable
		{
			font-family: Calibri;
			border-collapse: collapse;

		}

		#CharTable td, #CharTable th, #WordTable td, #WordTable th
		{
			border: 0px;
			padding: 5px 200px;
		}

		#CharTable tr:nth-child(even), #WordTable tr:nth-child(even)
		{
			background-color: #f2f2f2;
		}	

		#CharTable tr:hover, #WordTable tr:hover
		{
			background-color: #ddd;
		}

		#CharTable th
		{
			background-color: #4caf50;
			color: white;
		}

		#WordTable th
		{
			background-color: #ff9933;
			color: white;
		}

		#BackBtn
		{
			background-color: #008cba;
			border-radius: 4px;
			border: 1px solid #007399;
			padding: 10px 16px;

			color: white;
			font-family: Calibri;
			font-size: 16px;

			transition-duration: 0.4s;
		}

		#BackBtn:hover
		{
			background-color: white;
			border: 2px solid #008cba;

			color: black;
		}

	</style>
</head>
<body>
	<form name="ResultPage" method="post" action="index.php">
		<br><br>
		<img src="CFC.png" id="TopImg" width="800" height="120"><br><br><br><br>

		<table id="CharTable" align="center">
			<tr>
				<th>Character</th>
				<th>Count</th>
			</tr>
<?php

	// $arr = array('A' => 0, 'B' => 0, 'C' => 0, 'D' => 0, 'E' => 0, 'F' => 0, 'G' => 0, 'H' => 0, 'I' => 0, 'J' => 0, 'K' => 0, 'L' => 0, 'M' => 0, 'N' => 0, 'O' => 0, 'P' => 0, 'Q' => 0, 'R' => 0, 'S' => 0, 'T' => 0, 'U' => 0, 'V' => 0, 'W' => 0, 'X' => 0, 'Y' => 0, 'Z' => 0, 'a' => 0, 'b' => 0, 'c' => 0, 'd' => 0, 'e' => 0, 'f' => 0, 'g' => 0, 'h' => 0, 'i' => 0, 'j' => 0, 'k' => 0, 'l' => 0, 'm' => 0, 'n' => 0, 'o' => 0, 'p' => 0, 'q' => 0, 'r' => 0, 's' => 0, 't' => 0, 'u' => 0, 'v' => 0, 'w' => 0, 'x' => 0, 'y' => 0, 'z' => 0, '0' => 0, '1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 0, '6' => 0, '7' => 0, '8' => 0, '9' => 0, ' ' => 0, ',' => 0, '.' => 0, '?' => 0);

	if($_POST['text']=="")
	{
		header("location:index.php");
	}
	else
	{
		$enter=0;
		$input=$_POST['text'];
		$length=strlen($input);
		for($i=0;$i<128;$i++)
		{
			$arr[$i]=0;
		}
	
		for($count=0; $count<$length; $count++)
		{
			$x=ord($input[$count]);
			$arr[$x]++;
			if($x==10 || $x==13)
			{
				$enter++;
			}
		}
	
		// foreach ($arr as $alpha => $alpha_value)
		// {
		// 	if($alpha_value > 0)
		// 	{
		// 		if($alpha == ' ')
		// 		{
		// 			echo "Space ".$alpha_value."<br>";
		// 		}
		// 		else
		// 		{
		// 			echo $alpha." ".$alpha_value."<br>";
		// 		}
		// 	}
		// }
		
		for($i=0;$i<128;$i++)
		{
			if($i==10 && $enter>0)
			{
				echo "<tr>";
				echo "<td>";
				echo "Enter";
				echo "</td>";
				echo "<td>";
				echo $enter/2;
				echo "</td>";
				echo "</tr>";	
			}
			else if($i==32 && $arr[$i]>0)
			{
				echo "<tr>";
				echo "<td>";
				echo "Space";
				echo "</td>";
				echo "<td>";
				echo $arr[$i];
				echo "</td>";
				echo "</tr>";
			}
			else if($arr[$i]>0 && $i!=10 && $i!=13 && $i!=32)
			{
				echo "<tr>";
				echo "<td>";
				echo chr($i);
				echo "</td>";
				echo "<td>";
				echo $arr[$i];
				echo "</td>";
				echo "</tr>";
			}
		}
	}
	
?>
	
		</table>
		<br><br><br>
		<button type="submit" id="BackBtn">Input Another String</button><br><br><br><br><br><br><br><br>

		<table id="WordTable" align="center">
            <tr>
                <th>Word</th>
                <th>Count</th>
            </tr>
<?php
	$input=$_POST['text'];
	$length=strlen($input);

	$arr=array_count_values(str_word_count($input, 1));
	ksort($arr);
	foreach($arr as $word=>$count)
	{
		echo "<tr>";
		echo "<td>";
		echo $word;
		echo "</td>";
		echo "<td>";
		echo $count;
		echo "</td>";
		echo "</tr>"; 
	}
?>
        </table>
        <br><br><br>
		<button type="submit" id="BackBtn">Input Another String</button><br><br><br>
	</form>
</body>
</html>