<?php
/**
 * Created by PhpStorm.
 * User: mdsae
 * Date: 11-Jun-18
 * Time: 9:37 PM
 */

require 'config.php';
$id = $_POST['id'];
$head=$_POST['heading'];
$data=$_POST['newsbody'];

$statement="update test set heading = '$head', summertext = '$data' WHERE id = '$id'";
$statement1 = "insert into edithistory(id, heading, summertext) values ('$id', '$head', '$data')";

if(mysqli_query($conn,$statement) && mysqli_query($conn,$statement1))
{
    header('location:home.php');
}
else
{
	mysqli_error($conn);
}
mysqli_close($conn);