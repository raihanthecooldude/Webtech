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
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">News Site</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="home.php">Insert Data</a></li>
            <li><a href="viewdata.php">view Data</a></li>
            <li><a href="listdata.php">List Data</a></li>
            <li><a href="logoutm.php">Logout</a></li>
            <?php if(isset($_SESSION['un'])){
                $un= $_SESSION['un'];
        
                echo "<li><a href='#' style='float:right;'>"."<span class='label label-info'>Logged in as ".$un."</span></a></li>";

            }
            ?>
        </ul>
    </div>
</nav>
<?php

        require 'config.php';
        $id = $_GET['id'];
        $heading=$summertext='';


            $statement="select * from test where id='$id'";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    
                     setcookie('heading',$row['heading']);
                     $heading=$row['heading'];
                     setcookie('summertext',$row['summertext']);
                     $summertext=$row['summertext'];
                     $id=$row['id'];
                    
                }
            }
            mysqli_close($conn);
    ?>
<div class="container">

    
        <form name="summernote" method="post" action="editm.php">
            News Headline:<br/><input type="text" class="form-control" name="heading" value="<?php echo $heading; ?>"/><br/>
            News Body:<br/><textarea name="newsbody" id="summernote" class="summernote"> <?php echo $summertext; ?></textarea><br/>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" class="btn btn-success" value="Update News"/>
            </form>
    
   <!-- <center><h1> <span class="label label-default">Summernote data formatter</span></h1></center>-->
    
</div>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
</body>

</html>
