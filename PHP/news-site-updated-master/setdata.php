<?php
/**
 * Created by PhpStorm.
 * User: mdsae
 * Date: 11-Jun-18
 * Time: 9:37 PM
 */

require 'config.php';
$head=$_POST['heading'];
$data=$_POST['newsbody'];
$statement="insert into test(heading,summertext) values ('$head','$data')";

if(mysqli_query($conn,$statement))
{
    header('location:home.php');
}
else
    mysqli_error($conn);

mysqli_close($conn);