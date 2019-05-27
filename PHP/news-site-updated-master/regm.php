<?php
require 'config.php';
$un=$_POST['un'];
$pw=$_POST['pw'];
$email=$_POST['email'];
$statement="insert into login(username,password,email) values ('$un',md5('$pw'),'$email')";

if(mysqli_query($conn,$statement))
{
    header('location:loginv.html');
}
else
    mysqli_error($conn);

mysqli_close($conn);
?>