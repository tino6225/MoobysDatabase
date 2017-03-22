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
        <title>Mooby's Schedule</title>
            
    </head>
    <body>
		
		<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="btn btn-primary col-md-offset-1" href="moobyHome.php">Home</a>
		</div>	
		</nav>
		
		<div class="container">
			
			<div name="Form_addShift">
				<form method="POST" action="addWorkSch.php" class="form-horizontal">
					<fieldset>
						<legend>Create New Shift</legend>
						
						<div class="form-group">
							<label class="col-md-1">Employee: </label> 
								<select name="emplId">
									<?php
										if(!($stmt = $mysqli->prepare("SELECT E.fname, E.lname, E.id FROM mby_employee E"))){
											echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
										}

										if(!$stmt->execute()){
											echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
										}
										if(!$stmt->bind_result($fname, $lname, $id)){
											echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
										}
										while($stmt->fetch()){
										 echo '<option value=" '. $id . ' "> ' . $fname . " " . $lname . '</option>\n';
										}
										$stmt->close();
									?>	
									
								</select>						
						</div>
							
						<div class="form-group">					
								<label class="col-md-1">Date: </label>
								<input type="date" name="date" class="col-md-3">
						</div>
							
						<div class="form-group">
							<label class="col-md-1">Start Time: </label>
							<input type="time" name="start" class="col-md-3">
						</div>
							
						<div class="form-group">
								<label class="col-md-1">End Time: </label>
								<input type="time" name="end" class="col-md-3">
						</div>
							
						<div class="form-group">
							<input type="submit" name="submit" value="Create Shift" class="btn btn-primary col-md-offset">
						</div>
					</fieldset>
				</form>			
			</div>
			
			
			<div>
				<table class="table">
					<tr>
						<th>Mooby's Schedule</th>
					</tr>
					<tr>
						<th>Date</th>
						<th>Location</th>
						<th>Emp Id</th>
						<th>Name</th>
						<th></th>
						<th>Position</th>
						<th>Start Time</th>
						<th>End Time</th>					
					</tr>

					<?php

					if(!($stmt = $mysqli->prepare("SELECT S.date, R.city, S.employee_id, E.fname, E.lname, P.title, S.start_time, S.end_time
					FROM mby_schedule S INNER JOIN mby_employee E ON S.employee_id = E.id 
					INNER JOIN mby_position P ON E.position_id = P.id 
					INNER JOIN mby_restaurant R ON E.restaurant_id = R.id
					ORDER BY S.date DESC, R.city ASC, P.title ASC"))){
						echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
					}

					if(!$stmt->execute()){
						echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
					}
					if(!$stmt->bind_result($date,$location, $id, $fname, $lname, $position, $start, $end)){
						echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
					}
					while($stmt->fetch()){
					 echo "<tr>\n<td>\n" . $date . "\n</td>\n<td>\n" . $location . "\n</td>\n<td>\n" . $id . "\n</td>\n<td>\n" . $fname . "\n</td>\n<td>\n" . $lname . 
							"\n</td>\n<td>\n". $position . "\n</td>\n<td>\n" . $start . "\n</td>\n<td>\n" . 
							$end . "\n</td>\n</tr>";
					}
					$stmt->close();

					?>					
				</table>
			</div>
			
			
			
		</div>
		<script src = ""></script>
    </body>
</html>