

<?php
	include "tableaccess.php";
	$driver_id = "0001";
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
    <link rel="icon" href="../../favicon.ico">

    <title>Taxi-app Driver Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <!-- Fixed navbar -->
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
          <a class="navbar-brand" href="#">Taxi-App</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <button type="button" class="btn btn-danger">Sign Out</button>
          </form>
          
          <form class="navbar-form navbar-right" action="CallFunction.php" method ="post">
				<input type="hidden" name="driver_id" value="<?=$driver_id?>" />
				<a><font color="white">Availability</font></a> 
				<input type="submit" class="btn btn-danger" value = "<?php echo getAvailability($GLOBALS["driver_id"]) ?>"/>
          </form>
          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    
    <div class="container">
            <div class="jumbotron">
                <form action="CallFunction.php?document.getElementById("myTable").rows[0].cells[0]" method="post">
                    <br>
                    <br>
                    <br>
                    <div class="panel panel-primary">
                    <div class="panel-heading">Hire Request</div>
                    <table class="table table-striped">
						<th>Hire ID</th>
						<th>Date</th>
                        <th>Time</th>
                        <th>Start </th>
                        <th>Destination</th>
                        <th>No of Passengers</th>
						<?php
							$hireRequests =getHireRequests();
							
							foreach ($hireRequests as $request) {
						?>
								
									<tr>
										<td><?php echo $request[0] ?></td>
										<td><?php echo $request[5] ?></td>
										<td><?php echo $request[6] ?></td>
										<td><?php echo $request[1]," and " ,$request[2] ?></td>
										<td><?php echo $request[3]," and " ,$request[4]  ?></td>
										<td><?php echo $request[7] ?></td>
										<td><input type="submit" value="   Bid  "/></td>
										
										
									 </tr>
									
						
						<?php
							}
						?>
                    
                    </table>
                    </div>
                    <br>
                        </div>
                </form>
            </div>
        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>




