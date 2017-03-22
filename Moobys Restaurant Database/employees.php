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
        <title>Mooby's Employees</title>
            
    </head>
    <body>
		<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="btn btn-primary col-md-offset-1" href="moobyHome.php">Home</a>
		</div>	
		</nav>
		<div class="container">
				<div>
					<table class="table">
						<tr>
							<th>Mooby's Employees</th>
						</tr>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th></th>
							<th>Position</th>
							<th>Location</th>
							<th>Hr Rate</th>
							<th>Ph Num.</th>
						</tr>


						<?php

						if(!($stmt = $mysqli->prepare("SELECT E.id, E.fname, E.lname, P.title, R.city, E.hourly_rate, E.phone
						FROM mby_employee E INNER JOIN mby_position P
						ON E.position_id = P.id INNER JOIN mby_restaurant R
						ON E.restaurant_id = R.id
						Order by E.id ASC"))){
							echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
						}

						if(!$stmt->execute()){
							echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
						}
						if(!$stmt->bind_result($id, $fname, $lname, $position, $location, $hourly, $phone)){
							echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
						}
						while($stmt->fetch()){
						 echo "<tr>\n<td>\n" . $id . "\n</td>\n<td>\n" . $fname . "\n</td>\n<td>\n" . $lname . 
								"\n</td>\n<td>\n". $position . "\n</td>\n<td>\n" . $location . "\n</td>\n<td>\n" . 
								$hourly . "\n</td>\n<td>\n" . $phone . "\n</td>\n</tr>";
						}
						$stmt->close();

						?>						
					</table>
				</div>
				
				<div name="Form_addEmp">
					<form method="POST" action="addEmployee.php" class="form-horizontal">
						<fieldset >
							<h2>Add A New Employee</h2>
							<fieldset>
							<div class="form-group">
								<legend>Enter Personal Information</legend>
							</div>
							<div class="form-group">
								<label for="fName" class="col-md-2">First Name: </label>
								<input class="col-md-3" type="text" name="fName">
							</div>
							<div class="form-group">
								<label for="lName" class="col-md-2">Last Name: </label>
								<input class="col-md-3" type="text" name="lName">
							</div>
							<div class="form-group">
								<label for="phNum" class="col-md-2">Phone Number: </label>
								<input class="col-md-3" type="text" name="phNum">
							</div>
						</fieldset>
						<fieldset>
							<div class="form-group">
								<legend>Enter HR information</legend>
							</div>
							<div class="form-group">
								<label for="hrRate" class="col-md-2">Hourly Rate: </label>
								<input class="col-md-3" type="number" step = ".01" min = "0" name="hrRate">
							</div>
							<div class="form-group">
								<label for="restId" class="col-md-2">Location: </label> 
									<select name="restId" class="col-md-3">
									<?php
									if(!($stmt = $mysqli->prepare("SELECT R.id, R.city FROM mby_restaurant R"))){
										echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
									}

									if(!$stmt->execute()){
										echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
									}
									if(!$stmt->bind_result($id, $city)){
										echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
									}
									while($stmt->fetch()){
									 echo '<option value=" '. $id . ' "> ' . $id . " " . $city . '</option>\n';
									}
									$stmt->close();
									?>					
									</select>	
								
							</div>
							<div class="form-group">
								<label class="col-md-2">Position: </label>
									<select name="posId" class="col-md-3">
									<?php
									if(!($stmt = $mysqli->prepare("SELECT P.id, P.title FROM mby_position P"))){
										echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
									}

									if(!$stmt->execute()){
										echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
									}
									if(!$stmt->bind_result($id, $title)){
										echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
									}
									while($stmt->fetch()){
									 echo '<option value=" '. $id . ' "> ' . $title . '</option>\n';
									}
									$stmt->close();
									?>	
									</select>
							</div>
							</fieldset>	
							<div class="form-group">
								<input type="submit" name="submit" value="Add New Employee" class="btn btn-primary col-md-offset-2">
							</div>
						</fieldset>
					</form>
				
				</div>
		</div>
		<script src = ""></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    </body>
</html>