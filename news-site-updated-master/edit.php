<?php
	session_start();
	
	if ($_SERVER['REQUEST_METHOD'] != "POST" || $_SERVER['REQUEST_METHOD'] != "GET" || $_SERVER['REQUEST_METHOD'] != "get")
	{
		header("Location:login.php");
	}
?>
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
	            <li class="active"><a href="home.php">Insert Data</a></li>
	            <li><a href="viewdata.php">view Data</a></li>
	            <li><a href="listdata.php">List Data</a></li>
	            <li><a href="#">category 3</a></li>
		        <li><a href="#">Logged In As <?php $_SESSION['un']?></a></li>
	        </ul>
	    </div>
	</nav>
	<div class="container">
	   <!-- <center><h1> <span class="label label-default">Summernote data formatter</span></h1></center>-->
	    <form name="summernote" method="POST" action="editdata.php">
	    	<?php
	    		require("config.php");
	    		$id = $_GET['id'];
	    		
	    		$result = mysqli_query($conn,"select * from test WHERE id = '$id'");
	    		$row1 = mysqli_fetch_assoc($result);
	    	?>
	    	<input type="hidden" class="form-control" name="id" value = "<?php echo $id; ?>"/>
			News Headline:<br/><input type="text" class="form-control" name="heading" value = "<?php echo $row1['heading']; ?>"/><br/>
	        News Body:<br/><textarea name="newsbody" id="summernote" class="summernote" value = "<?php echo $row1['summertext']; ?>"></textarea><br/>
	        <input type="submit" class="btn btn-success" value="Save News"/>
	    </form>
	</div>
	<div class="container">
		<br/>
		<br/>
		<h4>Edit History</h4>
        <?php
            $statement1 ="select * from edithistory WHERE id = '$id'";
            $result1 = mysqli_query($conn, $statement1);

            if (mysqli_num_rows($result1) > 0)
            {
                while($row = mysqli_fetch_assoc($result1))
                {
					$h = str_split($row['heading'], 1);
                	
                	if ($h[0] != '*')
                	{
						echo "<div class='col-md-4' style = 'width : 100%;'><div class='panel-group'><div class='panel panel-info'><div class='panel-heading'><b>"."<a href=\"singleview.php?id=$row[id]\" class='text-warning'>".$row['heading']."</a></b> -By Admin at " .$row['datetime']."</div><div class='panel-body'>".$row['summertext'] ."</div></div></div></div><hr style = 'clear : both;'>";
					}
                }
            }
            else
            {
                echo "No Edit History";
            }
            mysqli_close($conn);
        ?>
    </div>
	<script>
	    $(document).ready(function() {
	        $('#summernote').summernote();
	    });
	</script>
</body>
</html>