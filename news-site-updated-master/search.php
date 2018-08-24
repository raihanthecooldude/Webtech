<?php
session_start();
if (!(isset($_SESSION['un']))){
    header("location:viewdata.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>News Site</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="summernote.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="summernote.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    
    .se
    {
        padding-top: 5%;
    }

</style>

<!-- <script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","search.php?q="+str,true);
  xmlhttp.send();
}
</script> -->
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">News Site</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Insert Data</a></li>
            <li><a href="viewdata.php">view Data</a></li>
            <li><a href="listdata.php">List Data</a></li>
            <li><a href="logoutm.php">Logout</a></li>
            <?php if(isset($_SESSION['un'])){
                $un= $_SESSION['un'];
                echo '<li align="right"> <form name="searchbar" method="get" action="search.php" class="se"> <input type="text" name="search" > &nbsp <button type="submit">Search</input> </form> </li>';
                echo "<li><a href='#' style='float:right;'>"."<span class='label label-info'>Logged in as ".$un."</span></a></li>";

            }
            ?>
        </ul>
    </div>
</nav>
<div class="container">
    <?php
        require 'config.php';
        $search=$_GET['search'];


            $statement="select * from test where heading like '%".$search."%' order by id desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    
                     echo "<div class='col-md-4'><div class='panel-group'><div class='panel panel-info'><div class='panel-heading'><b>"."<a href=\"singleview.php?id=$row[id]\" class='text-warning'>".$row['heading']."</a></b> -By Admin at " .$row['datetime']."</div><div class='panel-body'>".$row['summertext'] ."</div></div></div></div>";
                    
                }
            }
            mysqli_close($conn);
    ?>

    <!-- <form>
        <input type="text" size="30" onkeyup="showResult(this.value)">
        <div id="livesearch"></div>
    </form> -->
</div>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
</body>

</html>
