<?php
require 'config.php';
$id=$_POST['id'];
$heading=$_POST['heading'];
$summertext=$_POST['newsbody'];



$statement="update test set heading='$heading', summertext='$summertext', updated_at=now() where id='$id'";

if(mysqli_query($conn,$statement))
{
    header('location:listdata.php');
}
else
    mysqli_error($conn);

mysqli_close($conn);
?>