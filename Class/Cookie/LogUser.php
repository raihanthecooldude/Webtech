<?php
	session_start();
	//$un = array('IronMan', 'AntMan', 'Superman', 'Batman', 'Wolverine');
	//$ps = array('IronMan', 'AntMan', 'Superman', 'Batman', 'Wolverine');
	$un='YOLO';
	$ps='boss';
	
	if($_POST['un']==$un && $_POST['ps']==$ps)
	{
		$_SESSION['un']=$un;
		header("location:home.php");
	}
	else
	{
		$_SESSION['count']='a';
		header("location:index.php");
	}
?>