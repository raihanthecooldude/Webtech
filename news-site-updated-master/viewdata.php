<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>News Site</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<style type="text/css">
    
    .se
    {
        padding-top: 5%;
    }

</style>
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">News Site</a>
        </div>
        <ul class="nav navbar-nav">
            
            <?php if(isset($_SESSION['un'])){
                $un= $_SESSION['un'];
                echo '<li><a href="home.php">Insert Data</a></li>
                        <li class="active"><a href="viewdata.php">View data</a></li>
                        <li><a href="listdata.php">List Data</a></li>';
                echo "<li><a href=\"logoutm.php\">Logout</a></li>";
                echo "<li><a href='#' style='float:right;'>"."<span class='label label-info'>Logged in as ".$un."</span></a></li>";
                echo '<li align="right"> <form name="searchbar" method="get" action="search.php" class="se"> <input type="text" name="search" > &nbsp <button type="submit">Search</input> </form> </li>';
                // echo '<form> <input type="text" size="30" onkeyup="showResult(this.value)"></form>';
                

            }
            else{
                echo '<li><a href="home.php">Insert Data</a></li>
            <li class="active"><a href="viewdata.php">View data</a></li>
            <li><a href="listdata.php">List Data</a></li>
            <li><a href="loginv.html">Login</a></li>
            <li><a href="regv.html">Register</a></li>
            <li align="right">
                <form name="searchbar" method="get" action="search.php" class="se">
                     <input type="text" name="search" > &nbsp <button type="submit">Search</input>
                </form>
            </li>';

            // echo '<input type="text" size="30" onclick="showResult(this.value)"> &nbsp <button type="submit">Search</button>';
            }
            ?>
            
        </ul>
    </div>
</nav>
<div class="container">
        <?php
            require 'config.php';

            $statement="select * from test where deleted_at IS NULL order by id desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
					
						echo "<div class='col-md-4'><div class='panel-group'><div class='panel panel-info'><div class='panel-heading'><b>"."<a href=\"singleview.php?id=$row[id]\" class='text-warning'>".$row['heading']."</a></b> -By Admin at " .$row['datetime']."</div><div class='panel-body'>".$row['summertext'] ."</div></div></div></div>";
					
                }
            }
            else
            {
                echo "Nothing found in db";
            }
            mysqli_close($conn);
        ?>
</div>
</body>
</html>