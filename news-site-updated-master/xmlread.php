<?php

$handle = fopen($_GET['filename'], 'r');
    
while(!feof($handle))
{
	echo fgets($handle, 1024);
	echo "<br/>";
}
fclose($handle);
?>