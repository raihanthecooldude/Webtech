<?php
require 'config.php';
session_start();
$un=$_POST['un'];
$pw=$_POST['pw'];

$statement="select username, password from login where username='$un' and password=md5('$pw')";

$result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result)==1)
            {
            	$_SESSION['un']= $un;
            	header("location:listdata.php");
               
    		}
            else
            {
                echo "User Name or Password is wrong";
            }
            mysqli_close($conn);

            ?>