<?php


include('config.php');

///write new query here
$email=$_GET['emailvalue'];

$result=mysqli_query($conn,"SELECT * FROM login where email='$email' ");

$rows=mysqli_num_rows($result);

if($rows==1)
{
	sleep(2);
    echo "<p style='color:red;font-weight:14px;'>Sorry, Email Address is already been taken</p>";

}
else{
    sleep(2);
	echo "<p style='color:green;font-weight:14px;'>Congratulatins! Email address is available for registration</p>";

}

?>