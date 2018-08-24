<?php
/**
 * Created by PhpStorm.
 * User: mdsae
 * Date: 30-Jul-18
 * Time: 11:27 AM
 */
include('config.php');

///write new query here
$q=$_GET["q"];

$result=mysqli_query($conn,"SELECT id, heading FROM test where heading like  '%$q%' ");

$rows=mysqli_num_rows($result);
if ($rows> 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<p><a href='singleview.php?id=$row[id]' class='leftborder'><b>".$row['heading']."</b></a></p>";
    }

}
else
{
    echo "No news found according to this search term";
}