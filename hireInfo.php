<?php
ini_set('display_errors', 'On');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hire Info</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
   </head>

  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <img src="images/car.gif"  height="50" width="50">
          <a class="navbar-brand" href="#">Taxi-App Welcome <?php echo $_SESSION['name'] ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" action="footer.php">
            <button type="submit" class="btn btn-danger">Sign Out</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	<br><br><br>
	<div class="row">
    <div class="col-md-2 col-md-offset-5">
		<form action="" method="POST" class="form-signin">
			 <div class="form-group">
            <label for="exampleInputEmail1">Date</label>
            <input type="date" class="form-control" name="date">
            </div>
             <div class="form-group">
            <label for="exampleInputEmail1">Time</label>
            <input type="time" name="time" class="form-control">
            </div>
             <div class="form-group">
            <label for="exampleInputEmail1">No of Passengers</label>
            <input type="number" name="noOfPassengers" class="form-control">
            </div>
             <div class="form-group">
            <label for="exampleInputEmail1">Max Bid</label>
            <input type="number" name="maxBid" class="form-control">
            </div>
			<br>
			<input type="hidden" name="startLat" value="<?php echo $_GET['startLat'];?>">
			<input type="hidden" name="startLong" value="<?php echo $_GET['startLong'];?>">
			<input type="hidden" name="endLat" value="<?php echo $_GET['endLat'];?>">
			<input type="hidden" name="endLong" value="<?php echo $_GET['endLong'];?>">
            <button type="submit" name="submit" class="btn btn-success" >Submit</button>
		</form>
	</div>
      </div>
  </body>
</html>
