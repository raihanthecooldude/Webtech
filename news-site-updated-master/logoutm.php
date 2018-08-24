<?php

session_start();
session_unset($_SESSION['un']);
session_destroy();

header('location:viewdata.php');

?>