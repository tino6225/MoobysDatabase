<?php
//Turn on error reporting
ini_set('display_errors', 'On');
//Connects to the database
$mysqli = new mysqli("oniddb.cws.oregonstate.edu","tarantim-db","qiYPC4AXJLon1UXc","tarantim-db");
if($mysqli->connect_errno){
	echo "Connection error " . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <title>Mooby's Restaurants</title>
            
    </head>
    <body>
		<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="btn btn-primary col-md-offset-1" href="moobyHome.php">Home</a>
		</div>	
		</nav>
		<div class="container">
			<div name="restList">
				<table class="table table-striped">
					<tr>
						<th>Mooby's Restaurants</th>
					</tr>
					<tr>
						<th>ID</th>
						<th>Address</th>
						<th>City</th>
						<th>State</th>
					</tr>
				<<!--PHP code for generating table rows from Mooby database-->
				<?php

				if(!($stmt = $mysqli->prepare("SELECT id, address, city, state FROM mby_restaurant"))){
					echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
				}

				if(!$stmt->execute()){
					echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
				}
				if(!$stmt->bind_result($id, $address, $city, $state)){
					echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
				}
				while($stmt->fetch()){
				 echo "<tr>\n<td>\n" . $id . "\n</td>\n<td>\n" . $address . "\n</td>\n<td>\n" . $city . "\n</td>\n<td>\n" . $state . "\n</td>\n</tr>";
				}
				$stmt->close();

				?>			
					
				</table>
			</div>
			
			<div name="Form_addRest">
				<form method="POST" action="addRestaurant.php" class="form-horizontal">
					<div class="form-group">
						<legend>Enter New Location Address</legend>
					</div>
					<div class="form-group">
						<label for="address" class="col-md-1">Address: </label>
						<input class="col-md-3" type="text" name="address">
					</div>
					<div class="form-group">
						<label for="city" class="col-md-1">City: </label>
						<input type="text" class="col-md-3" name="city">
					</div>
					<div class="form-group">
						<label for="state" class="col-md-1">State: </label>
						<input class="col-md-3" type="text" name="state">
					</div>
					<div class="form-group">
						<label for="zip" class="col-md-1">Zip: </label>
						<input class="col-md-3" type="number" name="zip">
					</div>
					<div class="form-group">
						<input class="col-md-offset-1 btn btn-primary" type="submit" name="submit" value="Add New Location">
					</div>
				</form>			
			</div><!--end Form_addRest-->
			
			
		
		</div>
		
		
		<script src = ""></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    </body>
</html>